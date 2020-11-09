<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $table = "customers";
    protected $fillable = ["name"];

    public static function getUser() {
         $result = DB::select("SELECT * FROM customers ORDER BY name ASC");
         $i 	= 0;
        foreach($result as $row){
           $arr[$i] = array(
				'name' => $row->name
			);

			$i++;
       }
       return $arr;
    }
}
