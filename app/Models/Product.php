<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory; // ✅ C'est cette ligne qui manquait !

    protected $fillable = ['name', 'price', 'description', 'image'];
}
