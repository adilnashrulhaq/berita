<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecretCode extends Model
{
    protected $table = 'secret_code'; // Nama tabel di database

    protected $fillable = [
        'id',
        'name',
        'description',
        'id_article',
        'deleted_at',
    ];

    // Definisikan hubungan dengan model User
    public function article()
    {
        return $this->belongsTo(Article::class, 'id_article');
    }
}
