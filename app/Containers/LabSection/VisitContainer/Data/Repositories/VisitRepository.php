<?php

namespace App\Containers\LabSection\VisitContainer\Data\Repositories;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class VisitRepository extends ParentRepository
{
    public function list(): Collection|array
    {
        return Visit::query()->where(['patient_id' => Cache::get('patient')['id']])->with(['doctor', 'patient', 'service'])->orderBy('id', 'DESC')->get();
    }

    public function doctorList(): Collection|array
    {
        return Visit::query()->where(['doctor_id' => Cache::get('doctor')['id']])->with(['doctor', 'patient', 'service'])->orderBy('id', 'DESC')->get();
    }

    public function operationList(): Collection|array
    {
        return Visit::query()->with(['doctor', 'patient', 'service'])->orderBy('id', 'DESC')->get();
    }

}
