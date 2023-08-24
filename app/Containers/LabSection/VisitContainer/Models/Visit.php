<?php

namespace App\Containers\LabSection\VisitContainer\Models;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\OperationContainer\Models\Service;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visit extends ParentModel
{
    public $timestamps = false;
    protected $table = 'visits';
    protected $fillable = [
        'hash',
        'doctor_id',
        'patient_id',
        'service_id',
        'date',
        'description',
        'file',
    ];
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'visits';

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
