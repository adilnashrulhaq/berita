<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecretCode extends Model
{
    protected $table = 'secret_code';

    protected $fillable = [
        'question',
        'answer',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
