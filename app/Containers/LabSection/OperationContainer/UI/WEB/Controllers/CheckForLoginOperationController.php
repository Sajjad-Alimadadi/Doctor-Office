<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\CheckForLoginOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\CheckForLoginOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class CheckForLoginOperationController extends WebController
{
    public function run(CheckForLoginOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'mobile' => $request->post('mobile'),
            'pass'   => $request->post('pass'),
        ]);

        $result = app(CheckForLoginOperationAction::class)->run($data);
        return redirect()->back()->with('LoginResult', $result);
    }
}
