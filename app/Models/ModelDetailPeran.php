<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDetailPeran extends Model
{
    protected $table = 'detailperan';
    protected $fillable=[
        'IDDETAIL,PERAN',
        'IDPERAN',
        'IDPENGURUS'
    ];
}
