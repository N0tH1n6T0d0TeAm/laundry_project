<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActive extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'log_active';

    protected $primaryKey = 'id_log';

    public function pengguna(){
       return  $this->belongsTo(User::class,'id_users');
    }
}
