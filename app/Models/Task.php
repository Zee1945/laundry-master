<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'cucian';

    protected $fillable = [
        'name',
        'kode',
        'id_jenis',
        'berat',
        'harga_total',
        'status_progress',
        'status_bayar',
        'created_by',
    ];
}
