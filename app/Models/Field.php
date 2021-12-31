<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = 'fields';

    public  function aangemaakt_door(){
        return $this->belongsTo(User::class,'aangemaakt_door');
    }
}