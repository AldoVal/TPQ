<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBuku extends Model
{
    protected $table = 'buku';
    protected $fillable=[
        'IDBUKU',
        'BUKU',
        'KETERANGAN'
    ];
}
