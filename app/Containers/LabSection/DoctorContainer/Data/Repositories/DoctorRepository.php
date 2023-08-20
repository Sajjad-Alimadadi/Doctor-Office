<?php

namespace App\Containers\LabSection\DoctorContainer\Data\Repositories;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class DoctorRepository extends ParentRepository
{
    protected $fieldSearchable = [];

    public function CheckForLoginDoctor(array $data): int|bool
    {
        $info = Doctor::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->first();
        $result = Doctor::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->get()->count();
        if ($result === 1) {
            Cache::put('doctor', ['nationalcode' => $info['nationalcode'], 'mobile' => $info['mobile'], 'id' => $info['id']], Carbon::now()->addDay(1));
        }
        return $result;
    }
}
