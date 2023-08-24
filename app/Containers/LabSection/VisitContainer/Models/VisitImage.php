<?php

namespace App\Containers\LabSection\VisitContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class VisitImage extends ParentModel
{
    public $timestamps = false;
    protected $table = 'image_visits';
    protected $fillable = [
        'visit_id',
        'operation_id',
        'image'
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'image_visits';

    public function visit()
    {
        return $this->belongsTo(Visit::class, 'visit_id');
    }
}
