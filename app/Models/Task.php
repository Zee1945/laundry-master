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

    public function jeniss()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
