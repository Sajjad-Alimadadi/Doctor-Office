<?php

namespace App\Containers\LabSection\VisitContainer\Data\Repositories;

use App\Containers\LabSection\VisitContainer\Models\VisitImage;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Database\Eloquent\Collection;

class VisitImageRepository extends ParentRepository
{

    public function list($visit_id): Collection|array
    {
        return VisitImage::query()->where('visit_id', $visit_id)->get();
    }

}
