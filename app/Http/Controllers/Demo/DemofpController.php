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
        $device= Device::all();
        return view('fingerprint.device', compact('device'));
    }
    public function get_device_create(){
        return view('fingerprint.device_create');
    }
    public function get_user(){
        $data= Customer::all();
        return view('fingerprint.customer', ['customer' => $data]);
    }
    public function get_user_create(){
        return view('fingerprint.customer_create');
    }
}
