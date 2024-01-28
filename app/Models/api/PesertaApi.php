<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class PesertaApi extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';
    protected $fillable = [
        'foto', 'nama', 'alamat', 'email', 'password', 'angkatan'
    ];
}
