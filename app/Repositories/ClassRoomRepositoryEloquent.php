<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ClassRoomRepository;
use App\Models\ClassRoom;
use App\Validators\ClassRoomValidator;

/**
 * Class ClassRoomRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ClassRoomRepositoryEloquent extends BaseRepository implements ClassRoomRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ClassRoom::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
