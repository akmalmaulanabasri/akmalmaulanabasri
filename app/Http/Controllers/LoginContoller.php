<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($request->password);
        
        $check = User::where('email', $request->email)->first();


        User::create($validatedData);


        $request->session()->flash('success', 'Account created successfully!');

        return redirect()->route('login');

    }

    public function login(Request $request){

        $check = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($check)){
            $request->session()->regenerate();
            $request->session()->flash('success', 'Login successful!');
            return redirect()->route('home');
        }

        return redirect()->route('login')->with('error', 'Invalid username or password!');
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
