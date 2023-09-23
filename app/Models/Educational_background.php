<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational_background extends Model
{
    use HasFactory;

    protected $fillable =['elementary', 'elementary_year', 'middleschool', 'middleschool_year', 
    'highschool', 'highschool_year', 'ter'];
}
