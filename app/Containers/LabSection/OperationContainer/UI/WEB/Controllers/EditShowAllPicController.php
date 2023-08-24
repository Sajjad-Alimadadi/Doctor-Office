<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\EditShowAllPicAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\EditShowAllPicRequest;
use App\Containers\LabSection\VisitContainer\Models\VisitImage;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Database\Eloquent\Builder;

class EditShowAllPicController extends WebController
{
    public function run(EditShowAllPicRequest $request)
    {
        $data = $request->sanitizeInput([
            'hash' => $request->route('hash'),
            'id'   => $request->route('id'),
        ]);
        $image = VisitImage::query()->find($data['id']);
        $photos = VisitImage::query()
            ->with('visit')->whereHas('visit', function (Builder $query) use ($data) {
                $query->where('hash', $data['hash']);
            })->get();
        return View('labSection@operationContainer::editShowAllPic', compact('image', 'photos'));
    }
}
