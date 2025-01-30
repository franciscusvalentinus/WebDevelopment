<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
    ];

    public function lecturers() {
        return $this->hasMany(Lecturer::class, 'department_id', 'id');
    }
}
