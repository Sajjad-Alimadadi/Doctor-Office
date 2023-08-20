<?php

namespace App\Containers\LabSection\OperationContainer\Data\Repositories;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\DoctorContainer\Models\Skill;
use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Containers\LabSection\OperationContainer\Models\Services;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Containers\LabSection\VisitContainer\Models\VisitImage;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class OperationRepository extends ParentRepository
{
    protected $fieldSearchable = [];

    public function CheckForLoginOperation(array $data): int|bool
    {
        $info = Operation::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->first();
        $result = Operation::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->get()->count();
        if ($result === 1) {
            Cache::put('operation', ['nationalcode' => $info['nationalcode'], 'mobile' => $info['mobile'], 'id' => $info['id']], Carbon::now()->addDay(1));
        }

        return $result;
    }

    public function getAllDoctorSkill(): array|Collection
    {
        return Skill::query()->get();
    }

    public function getAllOperationService(): array|Collection
    {
        return Services::query()->get();
    }

    public function getAllService(): array|Collection
    {
        $array['service'] = Services::query()->get();
        $patient = Patient::query()->get();
        $doctor = Doctor::query()->get();
        $array['doctor'] = $doctor;
        $array['patient'] = $patient;
        return $array;
    }

    public function showAllPic(string $id): Collection|array
    {
        $visitId = Visit::query()->where('hash', $id)->first()->id;

        return VisitImage::query()->where('visit_id', $visitId)->get();
    }

    public function EditShowAllPic(array $array): Collection|array
    {
//        $visitId = Visit::query()->where(['id' => $data['id'], 'hash' => $data['id']])->first();
        return VisitImage::query()->where(['id' => $array['id']])->get();
    }

    public function getAllDoctorOperation(): mixed
    {
        return Doctor::query()->get();
    }

    public function getAllPatientOperation(): mixed
    {
        return Patient::query()->get();
    }

    public function sendSMS(array $data): int|null
    {
        $Visit = Visit::query()->where('id', $data['visit_id'])->get()->first();

        $doctor = Doctor::query()->where('id', $Visit['doctor_id'])->get()->first();

        $patient = Patient::query()->where('id', $Visit['patient_id'])->get()->first();

        $hashLink = env('Url') . "/show/" . $Visit['hash'];
        $doctorName = $doctor['name'] . " " . $doctor['family'];
        $doctorMobile = $doctor['mobile'];
        $patientName = $patient['name'] . " " . $patient['family'];
        $patientMobile = $patient['mobile'];

        $apiURL = env('Send_SMS_URL_Api');

        if ($data['type'] === 'd') {
            $text = " پزشک گرامی " . $doctorName . " سلام ، تصویر رادیولوژی بیمار شما ، " . $patientName . " در لینک زیر قابل مشاهده است " . $hashLink;

            // POST Data
            $postInput = [
                'text'   => $text,
                'mobile' => $doctorMobile,
            ];
            // Headers
            $headers = [];
            $response = Http::withHeaders($headers)->post($apiURL, $postInput);
            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            return $statusCode;
        } else {
            $text = $patientName . " سلام ، تصویر رادیولوژی شما در لینک زیر قابل مشاهده است " . $hashLink;
            // POST Data
            $postInput = [
                'text'   => $text,
                'mobile' => $patientMobile,
            ];
            // Headers
            $headers = [];
            $response = Http::withHeaders($headers)->post($apiURL, $postInput);
            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);

            return $statusCode;
        }
    }
}
