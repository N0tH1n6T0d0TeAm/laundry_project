<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumlah_Transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'jumlah_transaksi';

    protected $primaryKey = 'id_jumlah';

    use HasFactory;
}
