<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    protected $table = "novel";
    protected $primaryKey = 'id_novel';
    protected $fillable = ['judul','penulis','tahun_terbit'];
}
