<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPengurus extends Model
{
    protected $table = 'pengurus';
    protected $guarded = ['id'];
    protected $fillable =[
        'IDPENGURUS',
        'NAMA',
        'EMAIL',
        'HP',
        'GENDER',
        'PASSWORD',
        'AKTIF'
    ];

    use HasFactory;

    public function kemajuan(){
        return $this->hasMany(Kemajuan::class,'IDPENGURUS','IDPENGURUS');
    }

    public function detailPeran(){

    }

    public function user(){
        return $this->hasOne(User::class, 'IDPENGURUS','id');
    }



}
