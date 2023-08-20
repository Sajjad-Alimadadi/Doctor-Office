<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\SliderRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class GetAllSliderAdminTask extends ParentTask
{
    public function __construct(
        protected SliderRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return $this->repository->getAllSlider();
    }
}
