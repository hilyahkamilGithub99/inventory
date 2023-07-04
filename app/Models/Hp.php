<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hp extends Model
{
    use HasFactory;

    protected $table = 'hps';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_hp','jenis','harga','stok'
    ];
}
