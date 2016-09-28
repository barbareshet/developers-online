<?php namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
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
        
//        
       $this->validate($request, [
        'email' => 'required|unique:users|email|max:255',
        'username' => 'required|min:5|max:20',
        'password' => 'required|min:6',
       ]);
//        
       User::create([
           'email' => $request->input('email'),
           'username' => $request->input('username'),
           'password' => bcrypt($request->input('password')),
       ]);
       
       return redirect()->route('auth.login')->with('info', 'Your Account Has Been Created. You can now Log in');
    }
    //route to signing up and validation
    public function getLogin(){
       self::$data['title'] = 'login';
        return view('auth.login', self::$data); 
    }
    
    public function postLogin(Request $request){
        
        $this->validate($request,[
           'email'      => 'required',
           'password'   =>'required',
        ]);
//               return redirect()->route('home')->with('info', 'You are now Logged in');
        dd('ok');
    }
}
