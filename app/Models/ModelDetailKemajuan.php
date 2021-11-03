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
}
