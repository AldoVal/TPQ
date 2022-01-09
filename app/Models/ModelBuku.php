<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $guarded = ['IDBUKU'];
    protected $table = 'buku';
    protected $fillable=[
        'IDBUKU',
        'BUKU',
        'KETERANGAN'
    ];

    use HasFactory;

    public function bab(){
        return $this->hasMany(ModelBab::class, 'IDBUKU','IDUKU');
    }
}
