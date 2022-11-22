<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login2');
    }
    public function index2(){
        return view('auth.login2');
    }
    public function customLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            if(Auth::user()->role==1){
                $email = Auth::user()->email;
                return redirect()->route('beranda', compact('email'))->with('success','Signed in');
            }else{
                return redirect('login')->with('success','Admin unable to log in');  
            }
        }
        return redirect('login')->with('Login details are not valid');
    }
    public function registration(){
        return view('auth.registration');
    }
    public function customRegistration(Request $request){
        $request->validate([
            'email'=>'required',
            'name'=>'required',
            'password'=>'required|min:6'
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect('dashboard')->withSuccess('You have signed-in');
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);
    }
    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('login')->withSuccess('You are not allowed to access');
    }
    public function signOut(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
