<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'gambar', 'link', 'repo', 'featured'];
    protected $table = 'projects';
}
