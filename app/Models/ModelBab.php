<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBab extends Model
{
    protected $table = 'bab';
    protected $fillable=[
        'IDBAB',
        'IDBUKU',
        'BAB',
        'JUDUL',
        'KETERANGAN'
    ];

    public function buku(){
        return $this->belongsTo(ModelBuku::class,'IDBUKU','IDBUKU');
    }
}
