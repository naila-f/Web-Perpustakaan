<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamus extends Model
{
    use HasFactory;
    protected $table = "kamus";
    protected $primaryKey = 'id';
    protected $fillable = ['judul','tahun_terbit','penulis','penerbit'];
}
