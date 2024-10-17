<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'due_date'];

    // Validation rules
    public static $rules = [
        'title' => 'required|string|unique:tasks,title',
        'description' => 'nullable|string',
        'status' => 'nullable|string|in:pending,completed',
        'due_date' => 'required|date|after:today', // Ensure due_date is in the future
    ];
}
