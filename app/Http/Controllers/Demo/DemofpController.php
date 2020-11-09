<?php

namespace App\Http\Controllers\Demo;

use App\Device;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemofpController extends Controller
{
    // public function test($id){
    //     $test = Device::find($id);
    //     return $test->device_name;
    // }
    public function get_device(){
        $device= Device::getDevice();
        
        return view('fingerprint.device', compact('device'));
    }
    public function get_device_create(){
        return view('fingerprint.device_create');
    }
    public function get_user(){
        $customer= Customer::getUser();
        return view('fingerprint.customer', compact('customer'));
    }
    public function get_user_create(){
        return view('fingerprint.customer_create');
    }
}
