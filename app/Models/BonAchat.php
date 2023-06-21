<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonAchat extends Model

{
    use HasFactory;
    protected $table = 'bon_achats';
    protected $primaryKey = ['numBA', 'dateBA'];
    public $incrementing = false;
    protected $fillable = ['numBA', 'dateBA', 'typeAchat', 'tauxchange', 'valeurOR', 'fraisapproche', 'codeMoney', 'numcmd', 'datecmd', 'codefacture','datefacture'];

}
