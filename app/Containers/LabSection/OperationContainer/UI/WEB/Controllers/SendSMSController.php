<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\SendSMSAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\SendSMSRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

class SendSMSController extends WebController
{
    public function run(SendSMSRequest $request): RedirectResponse
    {
        $data = $this->sanitize($request, [
            'visit_id' => $request->route('visit_id'),
            'type'     => $request->route('type'),
        ]);
        app(SendSMSAction::class)->run($data);
        return redirect()->back()->with('result', 'ارسال با موفقیت انجام شد');
    }
}
