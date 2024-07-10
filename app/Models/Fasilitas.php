<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['fasilitas', 'deskripsi', 'foto'];
    protected $visible = ['fasilitas', 'deskripsi', 'foto'];

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/fasilitas/' . $this->foto))) {
            unlink(public_path('images/fasilitas/' . $this->foto));
        }
    }
}