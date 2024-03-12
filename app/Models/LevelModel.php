<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Menggunakan nama tabel yang sesuai

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'level_id', 'id');
    }
}

