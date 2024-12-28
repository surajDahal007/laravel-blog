<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerPage(){
        return view('/registerPage');
    }

    public function registerUser(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password2' => 'required'
        ]);

        if ($incomingFields['password'] === $incomingFields['password2']) {
            $incomingFields['name'] = strip_tags($incomingFields['name']);
            $incomingFields['email'] = strip_tags($incomingFields['email']);
            $incomingFields['password'] = bcrypt($incomingFields['password']);

            $user = User::create($incomingFields);
            auth()->login($user);
            return view('user.dashboard');
        }
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function loginPage()
    {
        return view('/loginPage');
    }

    public function loginUser(Request $request)
    {
        $incomingFields = $request->validate([
            'loginemail'=> 'required',
            'loginpassword' => 'required'
        ]); 

        if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'user') {
                return redirect('user/dashboard');
            }
            else {
                return redirect('/admin/dashboard');
            }
        }
        else{
            return redirect()->back()->with('error', 'Credentials do not match');
        }
    }


    // public function myDashboard()
    // {
    //     if (Auth::user()->role == 'admin') {
    //         return view('admin.dashboard');
    //     }
    //     else {
    //         return view('user.dashboard');
    //     }
    // }
}
