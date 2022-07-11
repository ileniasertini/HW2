@extends('layout')



@section('head')  
    <link rel="stylesheet" href="{{url('css/home.css')}}"/>
    <script src="{{ url('js/prodotti_upload.js') }}" defer></script>
    <script src="{{ url('js/prodotti_cerca.js') }}" defer></script>
    @parent
@endsection



@section('nav')
@parent
@endsection
        
       
       
@section('header')
@parent
@endsection
        
    

@section('contenuto')

        <!--PARTE ERRORE PER IL NON LOGIN IN CASO DI ACQUISTO-->
        <div id="error">
        </div>
        <!--------------------------->




        <!--PARTE CERCA PRODOTTO-->
        <form  id="cerca_prodotto" method="get">
            <h3>CERCA PRODOTTO</h3>
            <input type="text" id="prodotto"></input> 
            <input type='submit' id="prodotto_invio"></input>
        </form>
        <!--------------------------->



        <!--PARTE VISUALIZZAZIONE PRODOTTI-->
        <section id=sezione> 
        </section>
        <!--------------------------->
@endsection



@section('footer')
@parent
@endsection