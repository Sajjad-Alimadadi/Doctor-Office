<?php

namespace App\Containers\LabSection\SiteContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Support\Facades\DB;

class IndexRepository extends ParentRepository
{
    protected $fieldSearchable = [];

//    public function getParam($columns = ['*']): mixed
//    {
//       return DB::table('sliders')->get();
//    }
}
