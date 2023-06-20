<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = ['codePN', 'typeMagasin'];
    public $incrementing = false;
    protected $fillable = ['codePN', 'typeMagasin', 'designation', 'stkMin', 'stkMax', 'stkActuel', 'valeurActuel', 'unitemesure', 'CUMP', 'codesection'];
}
