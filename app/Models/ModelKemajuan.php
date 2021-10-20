<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKemajuan extends Model
{
    protected $table = 'kemajuan';
    protected $fillable=[
        'IDKEMAJUAN',
        'IDSANTRI',
        'IDPENGURUS',
        'TANGGAL',
        'STATUS'
    ];
}
