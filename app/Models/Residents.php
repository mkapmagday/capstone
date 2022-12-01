<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residents extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        
    ];
    protected $nullable = [
        'email',
    ];
    public $timestamps = false;
}
