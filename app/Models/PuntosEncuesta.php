<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuntosEncuesta extends Model
{
    use HasFactory;

    public function getKeyName(){
        return "id";
    }
}
