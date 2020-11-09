<?php

namespace App;

use App\Device;
use Illuminate\Database\Eloquent\Model;

class Finger extends Model
{
    protected $table = "fingers";
    protected $fillable = ["nik","finger_id", "finger_data"];

    public static function getac($data){
        if (isset($_GET['vc']) && !empty($_GET['vc'])) {

            $data = Device::getDeviceAcSn($_GET['vc']);

            echo $data[0]['ac'].$data[0]['sn'];
        }
    }

    public static function proccessRegister(
        $nik,
        $finger_id,
        $finger_data
    ){
        if (isset($_POST['RegTemp']) && !empty($_POST['RegTemp'])) {
        $data 		= explode(";",$_POST['RegTemp']);
		$vStamp 	= $data[0];
		$sn 		= $data[1];
		$nik    	= $data[2];
        $regTemp 	= $data[3];
        
        $device = Device::getDeviceBySn($sn);

        $salt = md5($device[0]['ac'].$device[0]['vkey'].$regTemp.$sn.$nik);
        if (strtoupper($vStamp) == strtoupper($salt)) {
             $result = DB::select("SELECT MAX(finger_id) as fid FROM fingers WHERE nik=".$nik);
             $data = $result->toArray();
             $fid = $data['fid'];

             if ($fid == 0) {
                //  $result2 = 
                }
            }
        }
    }
}
