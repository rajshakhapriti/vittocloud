<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function create()
    {
        return view('registration-form');
    }

    // ----------- [ Form validate ] -----------
    public function store(Request $request)
    {

        $request->validate(
            [
                'first_name'        =>      'required|string|max:20',
                'last_name'        =>      'required|string|max:20',
                'email'             =>      'required|email|unique:users,email',
                'dob'             =>      'required',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password',
                'address'           =>      'required|string'
            ]
        );

        $dataArray      =       array(
            "first_name"    =>    $request->first_name,
            "last_name"     =>     $request->last_name,
            "email"         =>          $request->email,
            "dob"         =>          $request->dob,
            "address"       =>          $request->address,
            "password"      =>          $request->password
        );

        $user           =       User::create($dataArray);
        if (!is_null($user)) {
            return back()->with("success", "Success! Registration completed");
        } else {
            return back()->with("failed", "Alert! Failed to register");
        }
    }
}
