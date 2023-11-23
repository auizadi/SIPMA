<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    protected $table = 'login';

    protected $primarykey = 'id_mhs';

    protected $fillable = [
        'nama',
        'email',
        'password'
    ];
}
