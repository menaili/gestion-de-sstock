<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reperes extends Model
{
    use HasFactory;
    protected $table = 'reperes';
    protected $primaryKey = ['coderepere'];
    public $incrementing = false;
    protected $fillable = ['coderepere','libelle'];
}
