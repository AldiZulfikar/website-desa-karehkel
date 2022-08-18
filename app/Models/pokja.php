<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokja extends Model
{
    use HasFactory;

    protected $table = 'pokjas';

    protected $fillable = [
        'kelompok',
        'program',
        'kegiatan',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
