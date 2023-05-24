<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded=['slug'];

    public function technologies(){
        return $this->belongsToMany(Technology::class)->withTimestamps();
    }
}
