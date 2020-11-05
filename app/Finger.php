<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finger extends Model
{
    protected $table = "fingers";
    protected $fillable = ["nik","finger_id", "finger_data"];

    public static function register(){
        
    }
}
