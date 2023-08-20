<?php

namespace App\Containers\LabSection\AdminContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Slider extends ParentModel
{
    public $timestamps = false;
    protected $table = 'sliders';
    protected $fillable = [
        'id',
        'file'
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'sliders';
}
