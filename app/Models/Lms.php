<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Lms extends Model
{
    protected $table='lms';//Eloquent akan membuat model mahasiswa untuk menyimpan record
    protected $primaryKey = 'id'; // Memanggi; isi DB dengan primarykey

    protected $fillable = [
        'nama_mapel',
        'nama_guru',
    ];
}
