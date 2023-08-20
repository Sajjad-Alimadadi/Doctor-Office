<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\DeleteSliderAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\DeleteSliderAdminRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteSliderAdminController extends WebController
{
    public function run(DeleteSliderAdminRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteSliderAdminAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
