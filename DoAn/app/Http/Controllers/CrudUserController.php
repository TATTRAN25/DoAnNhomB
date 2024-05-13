<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudUserController extends Controller 
{
    public function login()
    {
        return view('crud.login');
    }

    public function authUser(Request $request) 
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentals = $request->only('email', 'password');


        if (Auth::attempt($credentals)) {
            return redirect('gialap')->withSuccess("Login successfully :)");
        }

        return redirect('login')->withSuccess("Login failed :(");
    }

    public function giaLap()
    {
        if (Auth::check()) {
            $users = User::all();
            return view('crud.gialap', ['users' => $users]);
        }
    }
}