<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'deskripsi', 'foto'];
    public $visibe = ['judul', 'deskripsi', 'foto'];

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/artikel/' . $this->foto))) {
            return unlink(public_path('images/artikel/' . $this->foto));
        }
    }
}