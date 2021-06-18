<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
      $this->middleware(['auth']);
    }
    public function index()
    {
      return view('auth.register');
    }
    public function store(Request $request)
    {
      //validar los datos
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed'
      ]);
      //guardar datos
      $new_user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ])->assignRole($request->user_role);

      return redirect()->route('home.index');
    }
}
