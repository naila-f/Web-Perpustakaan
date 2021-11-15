<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarhadir extends Model
{
    use HasFactory;

    protected $table = "daftarhadir";
    protected $primaryKey = 'id_hadir';
    protected $fillable = ['keperluan','tanggal_kehadiran'];
}
