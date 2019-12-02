<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Auth\Events\Registered;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function user(){
        return view('admin.user');
    }
    public function adduser(){
        return view('admin.add-user');
    }
    public function addNewUser(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255']
        ]);
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->back()->with('success', 'User Added');
    }
}
