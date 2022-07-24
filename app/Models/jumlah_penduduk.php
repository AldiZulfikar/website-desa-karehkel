<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class jumlah_penduduk extends Model
{
    use HasFactory;

    protected $table = "jumlah_penduduks";
    
    protected $fillable = [
        "tahun",
        "lk",
        "pr",
        "jumlah",
        "jumlah_kk",
        "laju_pertumbuhan",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
