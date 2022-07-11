<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class logincontroller extends BaseController
{
    //LOGIN
    public function login_form(){
        $username = Session::get('username'); 
        $error=Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error)
                            ->with('username', $username);
    }


    public function checklogin(){  
        $user= User::where('username', request('username'))->first();
        if(!$user || !password_verify(request('password'), $user->password)){
            Session::put('error', 'errore dati');
            return redirect('login');
        }

        Session::put('username', $user->username);
        Session::put('id', $user->id);  
        return redirect('home');
    }






    //REGISTRAZIONE
    public function registrazione_form(){
        $username = Session::get('username'); 
        $error=Session::get('error');
        Session::forget('error');
        return view('registrazione')->with('error', $error)
                                    ->with('username', $username);
    }


    public function register(){
        //first restituisce true se esiste, altrimenti false
        if(User::where('username', request('username'))->first()) {
            Session::put('error', 'username esistente');
            return redirect('registrazione');
        }
        
        $user=new User;
        $user->username = request('username');
        $user->password = password_hash(request('password'),PASSWORD_BCRYPT);
        $user->nome = request('nome');
        $user->cognome = request('cognome');
        $user->email = request('email');


        if ($user->save()) {
            return redirect('login');
        } 
        else {
            Session::put('error', 'no registrazione');
            return redirect('registrazione');
        }
    }


    


    
    //LOGOUT
    public function logout(){
        Session::flush();
        return redirect('home');
    }
}