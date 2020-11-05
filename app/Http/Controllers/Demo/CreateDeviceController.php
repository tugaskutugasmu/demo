<?php

namespace App\Http\Controllers\Demo;

use App\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateDeviceController extends Controller
{
    public function create_device(Request $request){

        $validatedData = $request->validate([
            'device_name' => ['required', 'string', 'max:255'],
            'sn' => ['required', 'string', 'max:255'],
            'vc' => ['required', 'string', 'max:255'],
            'ac' => ['required', 'string', 'max:255'],
            'vkey' => ['required','string', 'max:255'],
        ]);

        $devices = new Device;
        $devices->device_name = $request->input('device_name');
        $devices->sn = $request->input('sn');
        $devices->vc = $request->input('vc');
        $devices->ac = $request->input('ac');
        $devices->vkey = $request->input('vkey');

        $devices->save();

        return redirect()->route('device.ui');
    }
}
