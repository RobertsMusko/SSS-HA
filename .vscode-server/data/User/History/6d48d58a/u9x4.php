<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manufacturer extends Model
{
    use HasFactory;
        protected $fillable = [];

        public function cars(){

            return $this->hasMany(car::class);

        }
}
