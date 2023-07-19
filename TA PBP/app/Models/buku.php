<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "tb_buku";
    protected $primaryKey = "id";
    public $fillable = ['id', 'judul', 'pengarang', 'penerbit', 'tanggal_masuk'];
    public $timestamps=false;
}
