<?php

namespace App\Http\Controllers\Demo;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCustomerController extends Controller
{
    public function create_user(Request $request){

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $users = new Customer;
        $users->name = $request->input('name');
        $users->save();

        return redirect()->route('user.ui');
    }
}
