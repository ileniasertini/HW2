<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Session;

class prodotticontroller extends BaseController{
    //PRODOTTI
    public function product(){
        $username = Session::get('username'); 
        return view('prodotti')->with('username', $username);
    }

    public function product_upload(){
        return Product::all();
    } 

    public function cerca_prodotto($prodotto){
        return Product::where('nome', $prodotto)->get();
    } 






    //CARRELLO
    public function carrello(){
        $username = Session::get('username'); 
        return view('carrello')->with('username', $username);
    }

    public function upload_carrello(){
        if(Session::get('id')){
        return DB::table('carts')
                    ->join('products','carts.nome','=', 'products.nome')
                    ->select('products.*')
                    ->get();
        }
    } 

    public function add_carrello($prodotto){
        $risposta=array();
        if(Session::get('id')){
            $cart = new Cart;

            $cart->users_id = Session::get('id');
            $cart->nome =$prodotto;

            if($cart->save()){
                $risposta[]='mandato';
                return $risposta;
            }else{
                $risposta[]='non mandato';
                return $risposta;
            }
        }else{
            $risposta[]='no accesso';
            return $risposta;
        }
    }
    
    public function remove_carrello($prodotto){
        $risposta=array();
 
        $deleted = Cart::where('users_id', Session::get('id'))
                        ->where('nome', $prodotto)
                        ->first();
   
        if($deleted->delete()){
            $risposta[]='mandato';
            return $risposta;
        }else{
            $risposta[]='non mandato';
            return $risposta;
        }
        
    } 


    



    //PROODOTTI HOME
    public function home_upload(){
        return DB::table('new_entrys')
            ->join('products','new_entrys.products_id','=', 'products.codice')
            ->select('products.*')
            ->get();
    }  

}