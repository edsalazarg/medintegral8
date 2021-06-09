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

    public function update($id)
    {

    }

     public function destroy(User $user)
     {
         $user->delete();
         return back();
     }
}
