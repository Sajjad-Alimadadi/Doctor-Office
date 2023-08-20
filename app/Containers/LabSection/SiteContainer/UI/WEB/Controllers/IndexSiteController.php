<?php

namespace App\Containers\LabSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\GetAllOperationServiceAction;
use App\Containers\LabSection\SiteContainer\Actions\IndexSiteAction;
use App\Containers\LabSection\SiteContainer\UI\WEB\Requests\IndexSiteRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class IndexSiteController extends WebController
{
    public function run(IndexSiteRequest $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $result = app(IndexSiteAction::class)->run();
        return View('labSection@siteContainer::indexSite', ['result' => $result]);
    }
}
