<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDetailKemajuan extends Model
{
    protected $table = 'detailkemajuan';
    protected $fillable=[
        'IDDETAILKEMAJUAN',
        'IDKEMAJUAN',
        'IDBAB',
        'KETERANGAN'
    ];
    public function bab (){
        return $this->belongsTo(ModelBab::class,'IDBAB','IDBAB');
    }

    public function kemajuan (){
        return $this->belongsTo(ModelKemajuan::class,'IDKEMAJUAN','IDKEMAJUAN');
    }

}
