<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class peribadatan extends Model
{
    use HasFactory;

    protected $table = "peribadatans";
    
    protected $fillable = [
        "tempat_ibadah",
        "jumlah",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
