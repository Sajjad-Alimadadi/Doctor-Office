<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\CreateVisitImageAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\CreateVisitImageRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

class CreateVisitImageController extends WebController
{
    public function run(CreateVisitImageRequest $request): RedirectResponse
    {
        $data = $this->sanitize($request, [
            '_token'   => $request->post('_token'),
            'visit_id' => $request->route('visit_id'),
            'image'    => $request->file('family'),
        ]);
        app(CreateVisitImageAction::class)->run($data);
        return redirect()->back()->with('CreateVisitImageResult', 'ثبت عکس با موفقیت انجام شد');
    }

}
