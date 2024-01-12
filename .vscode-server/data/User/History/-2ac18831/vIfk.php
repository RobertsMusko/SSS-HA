<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'year', 'salesperson_email'];

    public function Manufacturer()
    {
        return $this->belongsTo(manufacturer::class);
    }
}
