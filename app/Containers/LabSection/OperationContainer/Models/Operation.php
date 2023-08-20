<?php

namespace App\Containers\LabSection\OperationContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Operation extends ParentModel
{
    public $timestamps = false;
    protected $table = 'operations';
    protected $fillable = [
        'name',
        'family',
        'nationalcode',
        'mobile',
        'startdate',
        'birthday',
        'pass',
        'is_active',
    ];
    protected string $resourceKey = 'operations';
}
