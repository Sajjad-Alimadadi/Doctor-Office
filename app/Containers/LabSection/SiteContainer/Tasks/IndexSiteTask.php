<?php

namespace App\Containers\LabSection\SiteContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Models\News;
use App\Containers\LabSection\AdminContainer\Models\Slider;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class IndexSiteTask extends ParentTask
{
    public function __construct(
//        protected IndexRepository $repository
    )
    {
    }


    /**
     * @param array $data
     * @return mixed
     * @throws CreateResourceFailedException
     */
    public function run(): mixed
    {
        try {
            $result['news'] = News::query()->get();
            $result['slider'] = Slider::query()->get();
            return $result;
//            return $this->repository->getParam();
        } catch (Exception $e) {
            exit($e->getMessage());
            throw new CreateResourceFailedException();
        }
    }
}
