<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    protected $guarded = ['thumb','image'];



    public function developers(){
        return $this->belongsToMany(Developer::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class)->withTimestamps();
    }
    protected function image(): Attribute {
        return Attribute::make(
            get: fn(string|null $value) => $value !== null ? asset('storage/' . $value) : null,
        );
    }
    protected function thumb(): Attribute {
        return Attribute::make(
            get: fn(string|null $value) => $value !== null ? asset('storage/' . $value) : null,
        );
    }

}
