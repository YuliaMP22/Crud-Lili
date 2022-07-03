<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';
    protected $fillable = ['nama', 'kelas', 'jenis_kelamin', 'nama_wali', 'alamat'];
}