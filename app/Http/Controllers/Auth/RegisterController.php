<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\LoginController;

class RegisterController extends Controller
{
   public function showRegisterForm()
   {
      return view('auth.register');
   }

   public function register(Request $request)
   {
      $request->validate([
         'name' => 'required|string|unique:users',
         'email' => 'required|email|unique:users',
         'password' => 'required|min:6',
         'foto' => 'nullable|image|max:2048',
         'role' => 'in:admin,kurator,publik',
      ]);

      $fotoPath = null;
      if ($request->hasFile('foto')) {
         $fotoPath = $request->file('foto')->store('users', 'public');
      }

      User::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),
         'foto' => $fotoPath,
         'role' => $request->role ?? 'publik',
      ]);

      return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
   }
}