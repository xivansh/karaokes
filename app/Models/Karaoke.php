<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karaoke extends Model
{
    use HasFactory;
    protected  $guarded=[];


    // public function check_out()
    // {
    //     return $this->hasMany(CheckOut::class, 'karaoke_id');
    // }
}

