<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article'; // Nama tabel di database

    protected $fillable = [
        'id',
        'title',
        'description',
        'url_image',
        'release_date',
        'id_user',
        'deleted_at',
    ];

    // Definisikan hubungan dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
