<?php

namespace App\Http\Controllers;

use App\Http\Resources\GroupResource;
use App\Repositories\Interfaces\GroupRepositoryInterface;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected GroupRepositoryInterface $groupRepository;

    public function __construct(GroupRepositoryInterface $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
    public function index(Request $request)
    {
        return GroupResource::collection($this->groupRepository->all($request));
    }
    public function show($teacher_id)
    {
        return GroupResource::make($this->groupRepository->show($teacher_id));
    }
}
