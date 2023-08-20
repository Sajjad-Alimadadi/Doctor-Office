<?php

/*
|--------------------------------------------------------------------------
| Ship Helpers
|--------------------------------------------------------------------------
|
| Write only general helper functions here.
| Container specific helper functions should go into their own related Containers.
| All files under app/{section_name}/{container_name}/Helpers/ folder will be autoloaded by Apiato.
|
*/

use App\Containers\LabSection\VisitContainer\Models\VisitImage;

if (!function_exists('imageVisitsCount')) {
    function imageVisitsCount(int $id): int
    {
        return  VisitImage::query()->where('visit_id', $id)->get()->count();
    }
}
