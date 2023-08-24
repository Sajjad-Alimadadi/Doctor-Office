<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\UpdateOperationAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\UpdateOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateOperationController extends WebController
{
    public function run(UpdateOperationRequest $request)
    {
        $data = $this->sanitize($request, [
            '_token'       => $request->post('_token'),
            'id'           => $request->post('id'),
            'name'         => $request->post('name'),
            'family'       => $request->post('family'),
            'nationalcode' => $request->post('nationalcode'),
            'mobile'       => $request->post('mobile'),
            'startdate'    => $request->post('startdate'),
            'birthday'     => $request->post('birthday'),
            'pass'         => $request->post('pass'),
        ]);
        $result = app(UpdateOperationAction::class)->run($data);
        return redirect('/admin/operation/get')->with('result', 'ویرایش با موفقیت انجام شد');
    }

}
