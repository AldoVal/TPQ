<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSantri extends Model
{
        protected $guarded = ['id'];
        protected $table = 'santri';
        protected $fillable =[
            'IDSANTRI',
			'NAMASANTRI',
			'GENDER',
			'TGLLAHIR',
            'KOTALAHIR',
            'NAMAORTU',
            'ALAMATORTU',
            'HP',
            'EMAIL',
            'PASSWORD',
            'TANGGALMASUK',
            'AKTIF'
        ];


        public function kemajuan(){
            return $this->hasMany(ModelKemajuan::class,'IDSANTRI','IDSANTRI');
        }

        public function user(){
            return $this->hasOne(User::class,'IDSANTRI','id');
        }

}
