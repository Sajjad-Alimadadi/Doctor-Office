<?php

namespace App\Containers\LabSection\PatientContainer\Data\Repositories;

use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class PatientRepository extends ParentRepository
{
    protected $fieldSearchable = [];

    public function CheckForLoginPatient(array $data): int|bool
    {
        $info = Patient::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->first();
        $result = Patient::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->get()->count();
        if ($result === 1) {
            Cache::put('patient', ['nationalcode' => $info['nationalcode'], 'mobile' => $info['mobile'], 'id' => $info['id']], Carbon::now()->addDay(1));
        }
        return $result;
    }
}
