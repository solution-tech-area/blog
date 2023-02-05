<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|unique:users|email',
            'password'      => 'required|confirmed|min:8'
        ]);

        try {
            // Inserting data with save method
            // $user = new User;
            // $user->name = $request->name;
            // $user->email = $request->email;
            // $user->password = Hash::make($request->password);
            // $user->save();

            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password)
            ]);

            return redirect()->intended('login');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}