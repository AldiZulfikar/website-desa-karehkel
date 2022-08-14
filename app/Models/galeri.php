<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class galeri extends Model
{
    use HasFactory;

    protected $table = "galeris";

    protected $fillable = [
        "gambar_galeri",
        "judul",
        "pemilik",
        "ig",
        "toko",
        "is_active",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
