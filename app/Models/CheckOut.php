<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function karaoke()
    {
        return $this->belongsTo(Karaoke::class, 'karaoke_id');
    }
}