<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends BaseController{
    //route to signup page
    public function getSignup(){
        self::$data['title'] = 'register';
        return view('auth.register', self::$data);
    }
    //route to signing up and validation
    public function postSignup(Request $request){
       $this->validate($request, [
        'email' => 'required|unique:users|email|max:255',
        'username' => 'required|unique:users|username|max:20',
        'password' => 'required|min:6',
       ]);
       dd('you are now logged in');
    }
    
    public function getLogin(){
       self::$data['title'] = 'login';
        return view('auth.login', self::$data); 
    }
    
    public function postLogin(Request $request){
        dd('you are now logged in');
    }
}
