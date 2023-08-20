<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\CheckForLoginAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\CheckForLoginAdminRequest;
use App\Ship\Parents\Controllers\WebController;

class CheckForLoginAdminController extends WebController
{
    public function run(CheckForLoginAdminRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'mobile' => $request->post('mobile'),
            'pass'   => $request->post('pass'),
        ]);
        $result = app(CheckForLoginAdminAction::class)->run($data);
        return redirect()->back()->with('LoginResult', $result);
    }
}
