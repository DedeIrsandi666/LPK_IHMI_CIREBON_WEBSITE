<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiApi extends Model
{
    use HasFactory;

    protected $table = 'informasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar', 'postingan'
    ];
}
