<?php

namespace App\Containers\LabSection\AdminContainer\Data\Repositories;

use App\Containers\LabSection\AdminContainer\Models\Slider;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class SliderRepository extends ParentRepository
{

    public function getAllSlider()
    {
        return Slider::query()->get();
    }
}
