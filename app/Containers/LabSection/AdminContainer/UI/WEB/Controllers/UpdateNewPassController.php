<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\UpdateNewPassAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\UpdateNewPassRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateNewPassController extends WebController
{
    public function run(UpdateNewPassRequest $request)
    {
        $data = $this->sanitize($request, [
            '_token' => $request->post('_token'),
            'id'     => $request->post('id'),
            'pass'   => $request->post('pass'),
        ]);
        $result = app(UpdateNewPassAction::class)->run($data);
        return redirect('/admin/signout')->with('result', 'تغییر رمز با موفقیت انجام شد');
    }

}
