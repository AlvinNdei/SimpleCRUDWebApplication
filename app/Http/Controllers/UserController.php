<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields=$request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users','email')],
            'password'=>'required'
        ]);
        //hashing the password
        $incomingFields['password']=bcrypt($incomingFields['password']);
        $user=User::create($incomingFields);
        Auth::login($user);
        return redirect('/welcomepage');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function login(Request $request){
        $incomingFields=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if (Auth::attempt(['email'=>$incomingFields['email'],'password'=>$incomingFields['password']])){
            $request->session()->regenerate();
        }
         return redirect('/welcomepage');
    } 
   
}
