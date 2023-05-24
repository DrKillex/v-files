<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function developers(){
        return $this->belongsToMany(Developer::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class)->withTimestamps();
    }
}
