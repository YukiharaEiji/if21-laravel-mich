<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
     protected $table = 'jadwals';
    use HasUuids;
    protected $fillable = ['tahun_akademik', 'kode_smt','kelas','mata_kuliah_id', 'dosen_id','sesi_id'];

     public function mataKuliah() {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    public function dosen() {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    public function sesi() {
        return $this->belongsTo(Sesi::class, 'sesi_id');
    }
}
