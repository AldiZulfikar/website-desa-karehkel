<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struktur_pkk extends Model
{
    use HasFactory;

    protected $table = 'struktur_pkks';

    protected $fillable = [
        'foto_pengurus',
        'nama',
        'jabatan',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
