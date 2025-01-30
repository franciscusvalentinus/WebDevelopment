<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fragrance extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplied_by',
        'nameFragrance',
        'brandFragrance',
        'priceFragrance',
        'typeFragrance',
        'aromaFragrance',
    ];

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'supplied_by', 'id');
    }
}
