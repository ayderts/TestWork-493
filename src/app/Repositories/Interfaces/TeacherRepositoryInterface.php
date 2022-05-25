<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface TeacherRepositoryInterface
{
    public function all(Request $request);
    public function show($id);
}
