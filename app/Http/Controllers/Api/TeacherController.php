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

    public function index()
    {
        $teachers = $this->teacherRepository->all();
        return response()->json($teachers);
    }

    public function show($id)
    {
        $result = $this->teacherRepository->find($id);
        return response()->json($result);
    }
}
