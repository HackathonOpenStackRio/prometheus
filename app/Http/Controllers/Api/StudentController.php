<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudentRepositoryEloquent as StudentRepository;

class StudentController extends Controller
{
    /**
     * @var App\Repositories\StudentRepositoryEloquent;
     */
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    /**
    * @api {get} /api/student Request User information
    * @apiName StudentIndex
    * @apiGroup Student
    *    
    * @apiSuccess {Json} Array with all students in siystem
    */
    /**
    *   Return all student
    *   @param Illuminate\Http\Request $request
    *   @return String (Json)
    */
    public function index()
    {
        $students = $this->studentRepository->all();
        return response()->json($students);
    }

    /**
    * @api {get} /api/student Request User information
    * @apiName StudentShow
    * @apiGroup Student
    *    
    * @apiSuccess {Json} Student Object in Json
    */
    /**
    *   Return student data
    *   @param {Integer} $id Student Id
    *   @return String (Json)
    */
    public function show($id)
    {
        $result = $this->studentRepository->find($id);
        return response()->json($result);
    }    
}
