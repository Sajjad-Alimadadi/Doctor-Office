<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Models\Slider;
use App\Containers\LabSection\AdminContainer\Tasks\CreateSliderAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateSliderAdminAction extends ParentAction
{


    /**
     * @param array $data
     * @return Slider
     */
    public function run(array $data): Slider
    {
        unset($data['_token']);

        if (isset($data['file'])) {
//            $destination = base_path() . '/public/slider/';
            $destination = dirname(base_path()) . '/public_html/slider/';
            if (!is_dir($destination)) {
                mkdir($destination, 0777, true);
            }
            $destination = $destination . '/';
            $filename = rand(1111111, 99999999);
            $file = $data['file'];
            $file->move($destination, $filename . $file->getClientOriginalName());
            $data['file'] = $filename . $file->getClientOriginalName();
        }

        return app(CreateSliderAdminTask::class)->run($data);
    }
}
