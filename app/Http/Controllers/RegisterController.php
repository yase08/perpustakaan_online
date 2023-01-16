<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function registerStore(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email:rfc,dns',
      'address' => 'required',
      'phone' => 'required',
      'password' => 'required',
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'address' => $request->address,
      'phone' => $request->phone,
      'password' => Hash::make(($request->password)),
    ]);
    return redirect('/login');
  }
}
