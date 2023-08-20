<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\CreateVisitImageAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\CreateVisitImageRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateVisitImageController extends WebController
{
    public function run(CreateVisitImageRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'   => $request->post('_token'),
            'visit_id' => $request->route('visit_id'),
            'image'    => $request->file('family'),
        ]);
        $result = app(CreateVisitImageAction::class)->run($data);
        return redirect()->back()->with('CreateVisitImageResult', 'ثبت عکس با موفقیت انجام شد');
    }

}
