<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class galeripkk extends Model
{
    use HasFactory;

    protected $table = "galeripkks";

    protected $fillable = [
        "gambar_galeri",
        "judul",
        "pemilik",
        "ig",
        "youtube",
        "is_active",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
