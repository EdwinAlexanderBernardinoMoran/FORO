<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public $fillable = [
        'thread_id',
        'body'
    ];

    // Una respuesta le pertenece a un Usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
