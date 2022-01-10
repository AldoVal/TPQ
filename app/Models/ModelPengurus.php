<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPengurus extends Model
{
    protected $table = 'pengurus';
    protected $primaryKey = 'IDPENGURUS';
    protected $fillable =[
        'NAMA',
        'EMAIL',
        'HP',
        'GENDER',
        'PASSWORD',
        'AKTIF'
    ];

    use HasFactory;




}
