<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
   
    public function register(){
        return view('publisher.auth.register');
    }

    public function createUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:publisher,advertiser',
            'avatar' => 'required|image|max:2048',
        ]);

        $avatarPath = $request->file('avatar')->store('uploads', 'public');

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->avatar = $avatarPath;
        $user->save();

        return redirect()->route('dashboard');
    }

    public function login(){
        return view('publisher.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            if (Auth::user()->role === 'publisher') {
                
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'You do not have access to the dashboard']);
            }
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}



