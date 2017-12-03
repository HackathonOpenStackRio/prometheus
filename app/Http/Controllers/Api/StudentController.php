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

    public function index()
    {
        $students = $this->studentRepository->all();
        return response()->json($students);
    }

    public function show($id)
    {
        $result = $this->studentRepository->find($id);
        return response()->json($result);
    }

    public function getObservationByTeacher($idTeacher)
    {
        //$student = $this->studentRepository->with('Class', )
    }

}
