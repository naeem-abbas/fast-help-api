<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('emailAddress', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['isLoggedIn' => false, 'message' => 'Invalid credentials']);

        }

        return response()->json(['isLoggedIn'=> true,'userId'=>$user->id,'userFullName'=>$user->fullName,'userRole' => $user->role, 'message' => 'Logged In successfully']);
    }

    public function register(Request $request)
    {
         $request->validate([
            'fullName' => 'required',
            'email' => 'required|email|unique:users,emailAddress',
            'password' => 'required',
        ], [
            'fullName.required' => 'Full name is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists',
        ]);

        $user = User::create([
            'fullName' => $request->fullName,
            'emailAddress' => $request->email,
            'password' => Hash::make($request->password),
            'role'=>'user'
        ]);

        return response()->json(['isRegistered' => true, 'message' => 'Registered successfully']);
    }
}
