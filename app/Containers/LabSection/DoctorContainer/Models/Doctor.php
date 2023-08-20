<?php

namespace App\Containers\LabSection\DoctorContainer\Models;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Parents\Models\Model as ParentModel;

class Doctor extends ParentModel
{
    public $timestamps = false;
    protected $table = 'doctors';
    protected $fillable = [
        'skill_id',
        'doctorcode',
        'name',
        'family',
        'nationalcode',
        'mobile',
        'birthday',
        'pass',
        'is_active',
    ];
    protected string $resourceKey = 'doctors';

    public function visits()
    {
        return $this->hasMany(Visit::class, 'doctor_id');
    }


}
