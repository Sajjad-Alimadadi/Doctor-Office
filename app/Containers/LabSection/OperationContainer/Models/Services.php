<?php

namespace App\Containers\LabSection\OperationContainer\Models;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Services extends ParentModel
{
    public $timestamps = false;
    protected $table = 'services';
    protected $fillable = [
        'title',
    ];

    public function visit(): HasMany
    {
        return $this->HasMany(Visit::class, 'service_id');
    }

    protected string $resourceKey = 'services';
}
