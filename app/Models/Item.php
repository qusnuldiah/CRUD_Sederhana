<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Izinkan mass assignment untuk atribut name dan description
    protected $fillable = ['name', 'description'];
}
