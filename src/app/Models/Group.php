<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public array $sortable = ['firstname',
        'name',
        'number_of_students',
        ];
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_groups', 'group_id', 'teacher_id');
    }
}
