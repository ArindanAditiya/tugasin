<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DailyTodo extends Model
{
    use HasFactory;

    protected $table = 'daily_todos';
    protected $primaryKey = 'daily_todo_id';
    protected $fillable = [
        'task',
        'start', 
        'end', 
        'status'
    ];
}

