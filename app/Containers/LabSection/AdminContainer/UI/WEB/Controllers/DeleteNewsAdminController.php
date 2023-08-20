<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\DeleteNewsAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\DeleteNewsAdminRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteNewsAdminController extends WebController
{
    public function run(DeleteNewsAdminRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteNewsAdminAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
