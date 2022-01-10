<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'IDBUKU';
    protected $fillable=[
        'BUKU',
        'KETERANGAN'
    ];

    use HasFactory;

    public function bab(){
        return $this->hasMany(ModelBab::class, 'IDBUKU','IDUKU');
    }
}
