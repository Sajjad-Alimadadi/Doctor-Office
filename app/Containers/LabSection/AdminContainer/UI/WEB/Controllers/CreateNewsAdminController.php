<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\CreateNewsAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\CreateNewsAdminRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateNewsAdminController extends WebController
{
    public function run(CreateNewsAdminRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'title'  => $request->post('title'),
            'body'   => $request->post('body'),
        ]);
        $result = app(CreateNewsAdminAction::class)->run($data);
        return redirect('/admin/news')->with('result', 'ثبت خبر با موفقیت انجام شد');
    }

}
