<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKemajuan extends Model
{


    protected $table = 'kemajuan';
    protected $primariKey ='IDKEMAJUAN';
    protected $fillable=[

        'IDSANTRI',
        'IDPENGURUS',
        'TANGGAL',
        'STATUS'
    ];

    use HasFactory;

    public function kemajuanSantri(){
        return $this->belongsTo(ModelSantri::class,'IDSANTRI','IDSANTRI');
    }

    public function kemajuanPengurus(){
        return $this->belongsTo(ModelPengurus::class, 'IDPENGURUS','IDPENGURUS');
    }

    public function detailKemajuan(){
        return $this->hasMany(ModelDetailKemajuan::class, 'IDDETAILKEMAJUAN');
    }

}
