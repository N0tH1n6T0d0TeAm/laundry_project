<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $guarded = [];

    public function outlets()
    {
        return $this->belongsTo('App\Models\Outlet',  'outlet' ,"id_outlet");
    }
}
