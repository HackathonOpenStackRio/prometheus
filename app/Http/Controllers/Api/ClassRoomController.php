<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ClassRoomRepositoryEloquent as ClassRoomRepository;

class ClassRoomController extends Controller
{
    /**
     * @var App\Repositories\ClassRoomRepositoryEloquent;
     */
    private $classRoomRepository;

    public function __construct(ClassRoomRepository $classRoomRepository)
    {
        $this->classRoomRepository = $classRoomRepository;
    }

    public function getByIdEntity($idEntity)
    {
        $classRooms = $this->classRoomRepository->findWhere(['entity_id' => $idEntity]);
        return response()->json($classRooms);
    }

}
