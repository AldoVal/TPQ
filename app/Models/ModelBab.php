<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBab extends Model
{
    protected $guarded = ['IDBAB'];
    protected $table = 'bab';
    protected $fillable=[
        'IDBAB',
        'IDBUKU',
        'BAB',
        'JUDUL',
        'KETERANGAN'
    ];

    use HasFactory;

    public function buku(){
        return $this->belongsTo(ModelBuku::class,'IDBUKU','IDBBUKU');
    }

    public function detailKemajuan(){
        return $this->hasMany(ModelDetailKemajuan::class,'IDBAB','IDBAB');
    }
}
