<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "tb_pinjam";
    protected $primaryKey = "id";
    public $fillable = ['id', 'nama', 'pinjam', 'balik'];
    public $timestamps=false;
}
