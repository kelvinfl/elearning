<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassUser extends Model
{
    use HasFactory;

    protected $table = 'class_user'; // Nama tabel
    protected $fillable = ['user_id', 'class_id']; // Kolom yang dapat diisi
}
