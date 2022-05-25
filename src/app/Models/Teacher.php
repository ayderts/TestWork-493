<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;

    public array $sortable = ['firstname',
        'lastname',
        'age',
        'salary'];

    public function groups():BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'teacher_groups', 'teacher_id', 'group_id');
    }

}
