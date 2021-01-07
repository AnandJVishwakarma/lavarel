<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\login_database;
use Auth;
use DB;
use Exception;

class customException extends Exception {
};

class LoginController extends Controller
{
    public function index(){
        return view('pages.login'); 
    }

    public function store(Request $request){

        $this->validate($request,[
                'name'=>'required|max:10',
                'password'=>'required|max:5',
            ]);

        $pass1=$request->password;
        $name=$request->name;

        //extracting data from database in array format
        $login_data=login_database::all()->toArray();
        // dd($login_data[0]);
      
        //checking weather the username and password are authentic or not
        $i=0;
        try{
            while($i<count($login_data)){
            if(($login_data[$i]['username']==$name)&&($login_data[$i]['pass']==$pass1)){
                return redirect()->route('success');
                 break;
                }
            else
                {$i=$i+1;}
            }
            throw new customException();
        }
        catch(customException $e){
            return redirect()->route('Invalid');
        }    
    }
}