<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\UploadImageVisitOperationAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\UploadImageVisitOperationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Containers\LabSection\DoctorContainer\Models\Doctor;


class UploadImageVisitOperationController extends WebController
{
    public function run(UploadImageVisitOperationRequest $request): View|Factory|Application
    {
        $data = $request->sanitizeInput([
            'visit_id' => $request->route('visit_id'),
        ]);
        $result = app(UploadImageVisitOperationAction::class)->run($data);
        
        $Visit=Visit::query()->where('id', $request->route('visit_id'))->first();
        $Patient=Patient::query()->where('id', $Visit['patient_id'])->first();
        $Doctor=Doctor::query()->where('id', $Visit['doctor_id'])->first();
        return View('labSection@visitContainer::uploadImageVisitOperation', compact('result', 'data','Visit','Patient','Doctor'));
    }
}
