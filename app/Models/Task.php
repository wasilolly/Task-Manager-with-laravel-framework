<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, TaskUserManager;

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
