<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\CreateSliderAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\CreateSliderAdminRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateSliderAdminController extends WebController
{
    public function run(CreateSliderAdminRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'file'   => $request->file('file'),
        ]);
        $result = app(CreateSliderAdminAction::class)->run($data);
        return redirect('/admin/slider')->with('result', 'ثبت تصویر اسلایدر با موفقیت انجام شد');
    }

}
