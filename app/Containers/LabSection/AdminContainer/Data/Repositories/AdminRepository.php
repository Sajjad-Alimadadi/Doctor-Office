<?php

namespace App\Containers\LabSection\AdminContainer\Data\Repositories;

use App\Containers\LabSection\AdminContainer\Models\Admin;
use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class AdminRepository extends ParentRepository
{
    public function CheckForLoginAdmin(array $data): int|bool
    {
        $info = Admin::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->first();
        $result = Admin::query()->where(['mobile' => $data['mobile'], 'pass' => $data['pass']])->get()->count();
        if ($result === 1) {
            Cache::put('admin', ['username' => $info['username'], 'mobile' => $info['mobile'], 'id' => $info['id']], Carbon::now()->addDay(1));
        }
        return $result;
    }

    public function getAllOperationAdmin(): mixed
    {
        return Operation::query()->get();
    }
}
