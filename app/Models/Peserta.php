<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    public $table = "peserta";

    protected $fillable = [
        'foto', 'nama', 'alamat', 'email', 'password', 'angkatan',
    ];
}
