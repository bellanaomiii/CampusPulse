<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acara extends Model
{
    use HasFactory;
    protected $fillable = ['Category'];
    protected $table = 'acara';
    public $timestamps = false;
}
