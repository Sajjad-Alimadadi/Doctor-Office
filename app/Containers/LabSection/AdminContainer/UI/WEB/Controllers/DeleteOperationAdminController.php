<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\DeleteOperationAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\DeleteOperationAdminRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteOperationAdminController extends WebController
{
    public function run(DeleteOperationAdminRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteOperationAdminAction::class)->run($data);
        return redirect('/admin/operation/get')->with('result', 'حذف با موفقیت انجام شد');
    }
}
