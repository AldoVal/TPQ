<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSantri extends Model
{
        protected $table = 'santri';
        protected $primaryKey = 'IDSANTRI';
        protected $fillable =[
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


        public function santriKemajuan(){
            return $this->hasMany(ModelKemajuan::class,'IDSANTRI','IDSANTRI');
        }

}
