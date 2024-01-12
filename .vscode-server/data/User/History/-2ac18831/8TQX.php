<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = ['model', 'year', 'salesperson_email', 'manufacturer_id'];

    use HasFactory;

    public function manufacturer(){

        return $this->belongsTo(manufacturer::class);

    }

}
