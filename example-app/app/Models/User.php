<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 't_user';
    protected $primaryKey = 'iduser';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;
}
