<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bumdes extends Model
{
    protected $table = 'bumdes';

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