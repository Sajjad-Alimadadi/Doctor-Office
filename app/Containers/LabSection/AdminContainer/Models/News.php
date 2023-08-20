<?php

namespace App\Containers\LabSection\AdminContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class News extends ParentModel
{
    public $timestamps = false;
    protected $table = 'news';
    protected $fillable = [
        'title',
        'body',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'news';
}
