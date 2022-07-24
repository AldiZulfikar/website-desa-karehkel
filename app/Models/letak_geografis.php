<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class letak_geografis extends Model
{
    use HasFactory;

    protected $table = "letak_geografis";
    
    protected $fillable = [
        "batas",
        "desa",
        "kecamatan",
        "kabupaten",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
