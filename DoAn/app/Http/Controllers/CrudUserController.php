<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
            return redirect('')->withSuccess("Login successfully :)");
        }

        return redirect('login')->withSuccess("Login failed :(");
    }

    public function register()
    {
        return view('crud.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'user_name' => 'required|max:100',
            'password' => 'required',
            'retype' => 'required|same:password',
            'full_name' => 'required',
            'phone_number' => 'nullable',
            'email' => 'required|email|max:255|unique:users',
            'date_of_birth' => 'required',
            'user_image' => 'required|max:100'
        ]);

        $data = $request->all();

        $user = User::create([
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $profile = UserDetail::create([
            'user_id' => $user['id'],
            'phone_number' => $data['phone_number'],
            'date_of_birth' => $data['date_of_birth'],
            'sex' => $data['sex'],
            'user_image' => $data['user_image'],
            'full_name' => $data['full_name']
        ]);

        return redirect('login')->with('message', 'Register successfully');
    }

    public function viewAccountInfo()
    {
        return view('crud.account');
    }
}
