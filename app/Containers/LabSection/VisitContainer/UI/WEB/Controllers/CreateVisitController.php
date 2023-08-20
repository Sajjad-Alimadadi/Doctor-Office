<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\CreateVisitAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\CreateVisitRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateVisitController extends WebController
{
    public function run(CreateVisitRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'      => $request->post('_token'),
            'service_id'  => $request->post('service_id'),
            'date'        => $request->post('date'),
            'doctor_id'   => $request->post('doctor_id'),
            'patient_id'  => $request->post('patient_id'),
            'description' => $request->post('description'),
            'file'        => $request->file('family'),
        ]);
        $result = app(CreateVisitAction::class)->run($request->toArray());
        return redirect('/operation/visit')->with('CreateVisitResult', 'ثبت نسخه با موفقیت انجام شد');
    }

}
