<?php

namespace App\Repositories;
use App\Models\Teacher;
use App\Repositories\Interfaces\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherRepository implements TeacherRepositoryInterface
{
    public function all(Request $request)
    {
        $teachers = Teacher::query()->with('groups')->get();
        if(isset($request->sortOrder) && isset($request->filterBy)){
            $teachers = Teacher::query()->with('groups')
                ->where($request->filterBy, $request->filterValue)->orderBy($request->sortBy, $request->sortOrder)->get();
        }
        if(isset($request->sortOrder) && isset($request->searchBy)){
            $teachers = Teacher::query()->with('groups')
                ->where($request->filterBy, $request->filterValue)->where($request->searchBy, 'like', "%{$request->searchValue}%")
                ->orderBy($request->sortBy, $request->sortOrder)->get();
        }
        if(isset($request->sortOrder)){
        $teachers = Teacher::query()->with('groups')->orderBy($request->sortBy, $request->sortOrder)->get();
        }
       if(isset($request->filterBy)){
           $teachers = Teacher::with('groups')->where($request->filterBy, $request->filterValue)->get();
       }
       if(isset($request->searchBy)){
           $teachers = Teacher::with('groups')->where($request->searchBy, 'like', "%{$request->searchValue}%")->get();
       }
        return $teachers;

    }
    public function show($id)
    {

        return Teacher::with('groups:id,name,number_of_students')->find($id);
    }



}
