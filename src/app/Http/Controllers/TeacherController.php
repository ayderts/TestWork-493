<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeacherResource;
use App\Repositories\Interfaces\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected TeacherRepositoryInterface $teacherRepository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }
    public function index(Request $request)
    {
        return TeacherResource::collection($this->teacherRepository->all($request));
    }
    public function show($teacher_id,Request $request)
    {
        return TeacherResource::make($this->teacherRepository->show($teacher_id,$request));
    }
}
