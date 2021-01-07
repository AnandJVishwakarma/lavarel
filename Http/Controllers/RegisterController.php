<?php

namespace App\Http\Controllers;

use App\login_database;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.register');
    }

    public function store(Request $request){
        // $username=$request->name;
        // $email=$request->email;
        // $password=$request->password;
        // $password_confirm=$request->password_confirmed;

        // dd($username,$email,$password,$password_confirm);

        $this->validate($request,[
            'name'=>'required|max:10',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);

        $email=$request->email;
        $name=$request->name;

        $login_data=login_database::all()->toArray();

        $i=0;
        $check=True;
       
        while($i<count($login_data)){
            if(($login_data[$i]['username']==$name)||($login_data[$i]['email']==$email)){
                dd("username or email already exists!!!");
                break;
                $check=False;
                }
            else
                {$i=$i+1;}
            }
        
        if($check==True){
            login_database::create([
                'username'=>$request->name,
                'email'=>$request->email,
                'pass'=>$request->password,
            ]);

            return redirect()->route('register_success');
        }

    }
}