<?php

namespace App\Containers\LabSection\AdminContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Admin extends ParentModel
{
    public $timestamps = false;
    protected $table = 'admins';
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'admins';
}
