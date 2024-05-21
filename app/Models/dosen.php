<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    protected $primaryKey = 'dosen_id';

    protected $fillable = ['nama_dosen','nidn'];

    public function mataKuliah(){
        return $this->hasMany(matakuliah::class);
    }
}
