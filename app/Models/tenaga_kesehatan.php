<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class tenaga_kesehatan extends Model
{
    use HasFactory;

    protected $table = "tenaga_kesehatans";
    
    protected $fillable = [
        "jenis",
        "tenaga_kesehatan",
        "jumlah",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
