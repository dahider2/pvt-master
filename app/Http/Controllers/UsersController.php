<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function signin(){
      return view('signin');
    }


    public function authenticate(Request $request){
      $email = $request->get('email');
      $password = $request->get('password');

        if(Auth::attempt(['email'=> $email, 'password'=>$password])){
            // succes
          return view('confirmation')->withEmail('email');
        }else{

          return view('confirmation')->with('name', 'connorie');
        }
    }

    public function doRegistration(Request $request){

      $user = App\User::create(
        [
          'name'=>$name,
          'email'=>request('Email'),
          'tel'=>request('Tel'),
          'password'=>request('Password')
        ]);

        return view('confirmation')->with('name', 'Felicitation inscription reussite');
    }
}
