<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartiSatker extends Model
{
    use HasFactory;
    protected $table = 'tb_parti_satker';
    protected $primaryKey = 'id';
    public $incrementing = true;
    // protected $keyType = 'string';
    public $timestamps = true;
}
