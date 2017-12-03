<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TeacherRepositoryEloquent as TeacherRepository;

class TeacherController extends Controller
{
    /**
     * @var App\Repositories\TeacherRepositoryEloquent;
     */
    private $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    /**
    * @api {get} /api/teacher Request User information
    * @apiName TeacherIndex
    * @apiGroup Teacher
    *    
    * @apiSuccess {Json} Array with all teachers in siystem
    */
    /**
    *   Return all teachers        
    *   @return String (Json)
    */
    public function index()
    {
        $teachers = $this->teacherRepository->all();
        return response()->json($teachers);
    }
    
    /**
    * @api {get} /api/teacher Request User information
    * @apiName TeacherShow
    * @apiGroup Teacher
    *    
    * @apiSuccess {Json} Teacher Object in Json
    */
    /**
    *   Return teacher data
    *   @param {Integer} $id Teacher Id
    *   @return String (Json)
    */
    public function show($id)
    {
        $result = $this->teacherRepository->find($id);
        return response()->json($result);
    }
}
