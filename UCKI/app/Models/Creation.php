<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    use HasFactory;

    protected $fillable = [
        'creation',
    ];

    public function copyrights() {
        return $this->hasMany(Copyright::class, 'creation_id', 'id');
    }
}
