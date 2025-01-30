<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nidn',
        'department_id',
    ];

    public function departments(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function copyrights_1() {
        return $this->hasMany(Copyright::class, 'pencipta_1', 'id');
    }

    public function copyrights_2() {
        return $this->hasMany(Copyright::class, 'pencipta_2', 'id');
    }

    public function copyrights_3() {
        return $this->hasMany(Copyright::class, 'pencipta_3', 'id');
    }

    public function copyrights_4() {
        return $this->hasMany(Copyright::class, 'pencipta_4', 'id');
    }

    public function copyrights_5() {
        return $this->hasMany(Copyright::class, 'pencipta_5', 'id');
    }

    public function designs_1() {
        return $this->hasMany(Design::class, 'pencipta_1', 'id');
    }

    public function designs_2() {
        return $this->hasMany(Design::class, 'pencipta_2', 'id');
    }

    public function designs_3() {
        return $this->hasMany(Design::class, 'pencipta_3', 'id');
    }

    public function designs_4() {
        return $this->hasMany(Design::class, 'pencipta_4', 'id');
    }

    public function designs_5() {
        return $this->hasMany(Design::class, 'pencipta_5', 'id');
    }

    public function patents_1() {
        return $this->hasMany(Patent::class, 'pencipta_1', 'id');
    }

    public function patents_2() {
        return $this->hasMany(Patent::class, 'pencipta_2', 'id');
    }

    public function patents_3() {
        return $this->hasMany(Patent::class, 'pencipta_3', 'id');
    }

    public function patents_4() {
        return $this->hasMany(Patent::class, 'pencipta_4', 'id');
    }

    public function patents_5() {
        return $this->hasMany(Patent::class, 'pencipta_5', 'id');
    }

    public function brands_1() {
        return $this->hasMany(Brand::class, 'pencipta_1', 'id');
    }

    public function brands_2() {
        return $this->hasMany(Brand::class, 'pencipta_2', 'id');
    }

    public function brands_3() {
        return $this->hasMany(Brand::class, 'pencipta_3', 'id');
    }

    public function brands_4() {
        return $this->hasMany(Brand::class, 'pencipta_4', 'id');
    }

    public function brands_5() {
        return $this->hasMany(Brand::class, 'pencipta_5', 'id');
    }
}
