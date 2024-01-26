<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    public $table = "informasi";

    protected $fillable = [
        'gambar', 'postingan',
    ];
}