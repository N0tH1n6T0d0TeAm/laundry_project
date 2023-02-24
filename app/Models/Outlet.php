<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'outlet';

    protected $primaryKey = 'id_outlet';
    protected $guarded = [];
}
