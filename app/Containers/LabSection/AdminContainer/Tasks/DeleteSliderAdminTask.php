<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\SliderRepository;
use App\Containers\LabSection\AdminContainer\Models\Slider;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class DeleteSliderAdminTask extends ParentTask
{
    public function __construct(
        protected SliderRepository $repository
    ) {
    }


    /**
     * @param $id
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            $result = Slider::query()->where('id', $id)->get()->first();
            $file = public_path() . "/slider/" . $result['file'];
            File::delete($file);
            return Slider::query()->where('id', $id)->delete();
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
