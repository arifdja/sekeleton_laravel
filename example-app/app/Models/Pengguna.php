<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 't_user';

    protected $fillable = ['iduser','jenisakun','namauser','nip','pangkat','golongan','jabatan','idusergroup','defaultusergroup','kddept','kdunit','kdsatker','kdlokasi','notelp','email','counter'];
}
