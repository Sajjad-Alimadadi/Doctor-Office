<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\NewsRepository;
use App\Containers\LabSection\AdminContainer\Models\News;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteNewsAdminTask extends ParentTask
{
    public function __construct(
        protected NewsRepository $repository
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
            return News::query()->where('id', $id)->delete();
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
