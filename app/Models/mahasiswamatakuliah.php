<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswamatakuliah extends Model
{
    use HasFactory;

    protected $table = 'mahasiswamatakuliahs';

    protected $primaryKey = 'mahasiswa_matkul_id';

    protected $fillable = ['afl1', 'afl2', 'afl3', 'alp', 'mahasiswa_id', 'matakuliah_id'];

    public function mahasiswas(){
        return $this->belongsTo(mahasiswa::class, 'mahasiswa_id');
    }

    public function mataKuliahs() {
        return $this->belongsTo(matakuliah::class, 'matakuliah_id');
    }
}
