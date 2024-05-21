<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliahs';

    protected $primaryKey = 'matakuliah_id';

    protected $fillable = ['nama_matakuliah', 'hari', 'mulai_kelas', 'akhir_kelas', 'sks_matakuliah', 'ruang_kelas','dosen_id'];

    public function dosen(){
        return $this->belongsTo(dosen::class, 'dosen_id');
    }

    public function mahasiswaMatkul(){
        return $this->hasMany(mahasiswamatakuliah::class);
    }
}
