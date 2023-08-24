<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Containers\LabSection\VisitContainer\Tasks\CreateVisitTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class CreateVisitAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Visit
    {
        unset($data['_token']);
        $getIdPatient = Patient::query()->where('nationalcode', $data['patient_id'])->first();
        if ($getIdPatient === null) {
            throw ValidationException::withMessages(['Patient_id' => 'بیمار پیدا نشد']);
        }

        $getIdDoctor = Doctor::query()->where('doctorcode', $data['doctor_id'])->first();
        if ($getIdDoctor === null) {
            throw ValidationException::withMessages(['doctor_id' => 'دکتر پیدا نشد']);
        }

        $getMaxIdVisit = Visit::query()->max('id');
        if ($getMaxIdVisit === null) {
            $getMaxIdVisit = 0;
        }

        if (isset($data['file'])) {
            $destination = dirname(base_path()) . '/public_html/visit';
            if (!is_dir($destination)) {
                mkdir($destination, 0777, true);
            }
            $destination = $destination . '/';
            $filename = rand(1111111, 99999999);
            $file = $data['file'];
            $file->move($destination, $filename . $file->getClientOriginalName());
            $data['file'] = $filename . $file->getClientOriginalName();
        }

        $data['hash'] = md5($getMaxIdVisit + 1);
        $data['patient_id'] = $getIdPatient->id;
        $data['doctor_id'] = $getIdDoctor->id;

        return app(CreateVisitTask::class)->run($data);
    }
}
