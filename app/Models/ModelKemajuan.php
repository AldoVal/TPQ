<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKemajuan extends Model
{

    protected $guarded = ['id'];
    protected $table = 'kemajuan';
    protected $fillable=[
        'IDKEMAJUAN',
        'IDSANTRI',
        'IDPENGURUS',
        'TANGGAL',
        'STATUS'
    ];

    use HasFactory;

    public function santri(){
        return $this->belongsTo(ModelSantri::class,'IDSANTRI');
    }

    public function pengurus(){
        return $this->belongsTo(ModelPengurus::class, 'IDPENGURUS');
    }

    public function detailKemajuan(){
        return $this->hasMany(ModelDetailKemajuan::class, 'IDKEMAJUAN');
    }

}
