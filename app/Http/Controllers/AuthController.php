<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(){
        return view('auth/register');
    }
    public function registerSave(Request $request){
       Validator::make($request->all(),[
            'nom'=>'required|max:255',
            'matricule'=>'required|max:8',
            'email'=> 'required|email',
            'password'=>'required|string|min:8|confirmed'
       ])->validate();

       User::create([
            'nom'=>$request->nom,
            'matricule'=>$request->matricule,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'level'=>'Admin'
       ]);

       return redirect()->route('login');
    }

    public function  login(){
        return view('auth/login');
    }

    public function loginAction( Request $request){
        $request->validate([
            'nom'=>'required',
            'matricule'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:7'
        ]);
        
        if(Auth::attempt([
            "matricule"=>$request,
            "email"=>$request->email,
            "password"=> $request->password,
        ]))
        
        //$request->session()->flash(key:'error',value:'Email ou mot de passe incorrect');

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function profile()
    {
        return view('profile');
    }
}
