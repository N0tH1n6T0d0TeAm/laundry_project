<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Detail extends Model
{
    use HasFactory;

    protected $table = 'transaksi_detail';

    protected $primaryKey = 'id_transaksi_detail';

    public function outletz(){
        return $this->belongsTo(Outlet::class,"outlet_nama");
    }
}


