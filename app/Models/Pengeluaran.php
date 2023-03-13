<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';

    protected $primaryKey = 'id_pengeluaran';

    public function outf(){
        return $this->belongsTo(Outlet::class,'outlet_png');
    }
}
