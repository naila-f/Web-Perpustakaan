<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majalah extends Model
{
    use HasFactory;

    protected $table = "majalah";
    protected $primaryKey = 'id_majalah';
    protected $fillable = ['nama','tahun_terbit'];
}
