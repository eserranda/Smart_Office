<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scanning extends Model
{
    use HasFactory;
    protected $table = 'scanning';
    protected $fillable = ['mode_daftar'];
    public $timestamps = false;
}