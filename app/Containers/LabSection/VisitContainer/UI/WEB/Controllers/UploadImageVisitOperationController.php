<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\UploadImageVisitOperationAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\UploadImageVisitOperationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UploadImageVisitOperationController extends WebController
{
    public function run(UploadImageVisitOperationRequest $request): View|Factory|Application
    {
        $data = $request->sanitizeInput([
            'visit_id' => $request->route('visit_id'),
        ]);
        $result = app(UploadImageVisitOperationAction::class)->run($data);
        return View('labSection@visitContainer::uploadImageVisitOperation', ['result' => $result]);
    }
}
