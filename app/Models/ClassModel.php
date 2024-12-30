<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Pastikan nama tabel sesuai

    public function users()
    {
        return $this->belongsToMany(User::class, 'class_user');
    }
}
