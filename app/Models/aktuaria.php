<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktuaria extends Model
{
    use HasFactory;

    protected $table = 'aktuarias';
    protected $fillable = ['nama', 'gambar'];
    protected $primaryKey = 'id';
}
