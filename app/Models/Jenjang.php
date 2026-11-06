<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenjang extends Model
{
    use HasFactory;
    protected $table = 'jenjangs'; 
    protected $fillable = ['kode_jenjang', 'nama_jenjang'];
}
