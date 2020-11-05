<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Device extends Model
{
    protected $table = "devices";
    protected $fillable = ["device_name","sn","vc","ac","vkey"];

    public static function getDevice(){
       $result = DB::select('SELECT * FROM devices ORDER BY device_name ASC');
       $arr 	= array();
       $i 	= 0;
       foreach($result as $row){
           $arr[$i] = array(
				'device_name'	=> 'device_name',
				'sn'		=> 'sn',
				'vc'		=> 'vc',
				'ac'		=> 'ac',
				'vkey'		=> 'vkey'
			);

			$i++;
       }
       return $arr;
    }

    public static function getDeviceAcSn($vc) {
         $result = DB::select("SELECT * FROM devices WHERE vc ='".$vc."'");
         $i 	= 0;
        foreach($result as $row){
           $arr[$i] = array(
				'device_name'	=> $row['device_name'],
				'sn'		=> $row['sn'],
				'vc'		=> $row['vc'],
				'ac'		=> $row['ac'],
				'vkey'		=> $row['vkey']
			);

			$i++;
       }
       return $arr;
    }

    public static function getDeviceBySn($sn){
        $result = DB::select("SELECT * FROM devices WHERE sn ='".$sn."'");
        foreach($result as $row){
           $arr[$i] = array(
				'device_name'	=> $row['device_name'],
				'sn'		=> $row['sn'],
				'vc'		=> $row['vc'],
				'ac'		=> $row['ac'],
				'vkey'		=> $row['vkey']
			);

			$i++;
       }
       return $arr;
    }

}
