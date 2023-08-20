<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\SendSMSAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\SendSMSRequest;
use App\Ship\Parents\Controllers\WebController;

class SendSMSController extends WebController
{
    public function run(SendSMSRequest $request)
    {
        $data = $request->sanitizeInput([
            'visit_id' => $request->route('visit_id'),
            'type'     => $request->route('type'),
        ]);
        $result = app(SendSMSAction::class)->run($data);
        return redirect()->back()->with('result', 'ارسال با موفقیت انجام شد');
    }
}
