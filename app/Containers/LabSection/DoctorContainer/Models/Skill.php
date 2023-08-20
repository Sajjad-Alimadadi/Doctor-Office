<?php

namespace App\Containers\LabSection\DoctorContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Skill extends ParentModel
{
    public $timestamps = false;
    protected $table = 'skills';
    protected $fillable = [
        'id',
        'title',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'skills';
}
