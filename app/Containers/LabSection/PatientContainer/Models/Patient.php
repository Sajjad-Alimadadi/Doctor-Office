<?php

namespace App\Containers\LabSection\PatientContainer\Models;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends ParentModel
{
    public $timestamps = false;
    protected $table = 'patients';
    protected $fillable = [
        'nationalcode',
        'mobile',
        'name',
        'family',
        'birthday',
        'pass',
        'is_active',
    ];
    protected string $resourceKey = 'Patient';

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class, 'petient_id');
    }
}
