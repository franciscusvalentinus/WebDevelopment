<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_ciptaan',
        'tanggal_permohonan',
        'nomor_permohonan',
        'pemegang_hak_cipta',
        'nomor_pencatatan',
        'tanggal_penerimaan',
        'creation_id',
        'pencipta_1',
        'pencipta_2',
        'pencipta_3',
        'pencipta_4',
        'pencipta_5',
        'pencipta_6',
        'pencipta_7',
        'pencipta_8',
        'pencipta_9',
        'pencipta_10',
        'helper',
    ];

    public function creations(){
        return $this->belongsTo(Creation::class, 'creation_id', 'id');
    }

    public function lecturers_1(){
        return $this->belongsTo(Lecturer::class, 'pencipta_1', 'id');
    }

    public function lecturers_2(){
        return $this->belongsTo(Lecturer::class, 'pencipta_2', 'id');
    }

    public function lecturers_3(){
        return $this->belongsTo(Lecturer::class, 'pencipta_3', 'id');
    }

    public function lecturers_4(){
        return $this->belongsTo(Lecturer::class, 'pencipta_4', 'id');
    }

    public function lecturers_5(){
        return $this->belongsTo(Lecturer::class, 'pencipta_5', 'id');
    }

    public function lecturers_6(){
        return $this->belongsTo(Lecturer::class, 'pencipta_6', 'id');
    }

    public function lecturers_7(){
        return $this->belongsTo(Lecturer::class, 'pencipta_7', 'id');
    }

    public function lecturers_8(){
        return $this->belongsTo(Lecturer::class, 'pencipta_8', 'id');
    }

    public function lecturers_9(){
        return $this->belongsTo(Lecturer::class, 'pencipta_9', 'id');
    }

    public function lecturers_10(){
        return $this->belongsTo(Lecturer::class, 'pencipta_10', 'id');
    }
}
