<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBab extends Model
{

    protected $table = 'bab';
    protected $primaryKey = 'IDBAB';
    protected $fillable=[
        'IDBUKU',
        'BAB',
        'JUDUL',
        'KETERANGAN'
    ];

    use HasFactory;

    public function buku(){
        return $this->belongsTo(ModelBuku::class,'IDBUKU','IDBBUKU');
    }

    public function babDetailKemajuan(){
        return $this->hasMany(ModelDetailKemajuan::class,'IDBAB','IDBAB');
    }
}
