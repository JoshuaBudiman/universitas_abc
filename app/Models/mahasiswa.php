<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    protected $primaryKey = 'mahasiswa_id';

    protected $fillable = ['nama_mahasiwa','nim', 'angkatan', 'jumlah_sks'];

    public function mahasiswaMatkul(){
        return $this->hasMany(mahasiswamatakuliah::class);
    }
}
