<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Review;
use App\Models\User;
use Session;

class homecontroller extends BaseController{
    //HOME VIEW
    public function home_view(){
        $username = Session::get('username');  
        return view('home')->with('username', $username);
    }






    //SPOTIFY API
    public function cerca_spotify($cantante){
        //VERIFICO PRIMA CHE SIA STATO EFFETTUATO L'ACCESSO
        if(Session::get('id')){
        $client_id='5babc8c5609b4aada2404fc27a9634c9';
        $client_secret='67a2ae5b01844960bad42c6ca715b53f';

        // ACCESSO TOKEN //OK
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);    
        
        //RICHIESTA
        $url = 'https://api.spotify.com/v1/search?type=album&q='.$cantante;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res=curl_exec($ch);
        curl_close($ch);
        return $res;   

        }else{
            $risposta=array();
            $risposta[]='errore';
            return $risposta;
        }
    }






    //EMAIL API
    public function validazione($email){
        $api_key='ea8a0cbd96fb47028d9ecb2d59ae3c29';
        $url ='https://emailvalidation.abstractapi.com/v1/?api_key='.$api_key.'&email='.$email.'';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res= curl_exec($ch);
        curl_close($ch);

        return $res;    
    }






    //RECENSIONI
    public function recensione_add($recensione){
        $risposta=array();
        if(!Session::get('id')){
            $risposta[]='no accesso';
            return $risposta;
        }
        $review=new Review;
        $username = Session::get('username'); 
        $review->utente = $username;
        $review->descrizione = $recensione;
    
        if($review->save()){
            $risposta[]='aggiunta';
            return $risposta;
        }else{
            $risposta[]='non aggiunta';
            return $risposta;
        }  
    }

    public function recensione_view(){
        return Review::all();
    }






    //CONTATTI VIEW
    public function contatti_home(){
        $username = Session::get('username');  
        return view('contatti')->with('username', $username);
    }
}