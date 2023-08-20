<?php

namespace App\Containers\LabSection\AdminContainer\Data\Repositories;

use App\Containers\LabSection\AdminContainer\Models\News;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class NewsRepository extends ParentRepository
{
    public function getAll(): mixed
    {
        return News::query()->get();
    }
}
