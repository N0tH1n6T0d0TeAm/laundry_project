<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'paket';

    protected $primaryKey = 'id_paket';
    protected $guarded = [];
    

    public function outlet()
    {
        return $this->belongsTo('App\Models\Outlet',  'id_outlet' ,"id_outlet");
    }
}
