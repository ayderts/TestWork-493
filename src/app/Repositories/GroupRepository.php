<?php

namespace App\Repositories;

use App\Models\Group;
use App\Models\Teacher;
use App\Repositories\Interfaces\GroupRepositoryInterface;
use Illuminate\Http\Request;

class GroupRepository implements GroupRepositoryInterface
{
    public function all(Request $request)
    {
        if(isset($request->sortOrder) && isset($request->filterBy)){
            return Group::query()->with('teachers:id,firstname,lastname,salary')
                ->where($request->filterBy, $request->filterValue)->orderBy($request->sortBy, $request->sortOrder)->get();
        }
        if(isset($request->sortOrder) && isset($request->searchBy)){
            return Group::query()->with('teachers:id,firstname,lastname,salary')
                ->where($request->filterBy, $request->filterValue)->where($request->searchBy, 'like', "%{$request->searchValue}%")
                ->orderBy($request->sortBy, $request->sortOrder)->get();
        }
        if(isset($request->sortOrder)){
            return Group::query()->with('teachers:id,firstname,lastname,salary')->orderBy($request->sortBy, $request->sortOrder)->get();
        }
        if(isset($request->filterBy)){
            return Group::query()->with('teachers:id,firstname,lastname,salary')->where($request->filterBy, $request->filterValue)->get();
        }
        if(isset($request->searchBy)){
            return Group::query()->with('teachers:id,firstname,lastname,salary')->where($request->searchBy, 'like', "%{$request->searchValue}%")->get();
        }
        return Group::query()->with('teachers:id,firstname,lastname,salary')->get();;

    }
    public function show($id)
    {
        return Group::with('teachers:id,firstname,lastname,salary')->find($id);
    }
}
