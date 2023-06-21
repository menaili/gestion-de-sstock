<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = 'sections';
    protected $primaryKey = ['codesection'];
    public $incrementing = false;
    protected $fillable = ['codesection','coderepere'];

}
