<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameSupplier',
        'addressSupplier',
        'phoneSupplier',
        'emailSupplier',
    ];

    public function fragrances() {
        return $this->hasMany(Fragrance::class, 'supplied_by', 'id');
    }
}
