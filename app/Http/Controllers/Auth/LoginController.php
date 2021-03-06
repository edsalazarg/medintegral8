<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware(['guest']);
    }
    public function index(){
      return view('auth.login');
    }
    //validar los datos
    public function store(Request $request){
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
      ]);
      //Intentar login
      if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
        return back()->with('status','Invalid login details');
      }

      return redirect()->route('home.index');
    }
}
