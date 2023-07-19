<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = "tb_pengguna";
    protected $primaryKey = "id";
    public $fillable = ['id', 'un', 'pw', 'nama', 'alamat', 'telepon', 'role'];
    public $timestamps=false;
}
