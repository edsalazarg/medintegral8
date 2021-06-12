<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        //validar los datos
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        $user =  Patient::findOrFail($id);
        $user->fill($request);
        $user->save();

        $request->session()->flash('status', 'The user was updated!');

        return redirect()->route('users.index');
    }

     public function destroy(User $user)
     {
         $user->delete();
         return back();
     }
}
