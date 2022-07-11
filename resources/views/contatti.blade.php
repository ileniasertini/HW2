@extends('layout')



@section('head')  
    <link rel='stylesheet' href="{{ url('css/contatti.css') }}">
    <script src="{{ url('js/recensione_visualizza.js') }}" defer></script>
    @parent
@endsection



@section('nav')
@parent
@endsection
        
       
       
@section('header')
@parent
@endsection

    

@section('contenuto')
        <!--PARTE CONTATTI-->
        <div id="contact">
                <p>
                    Vieni a trovarci!</br>
                    Ilenia's Shop - via etnea 20, Catania(CT)</br>
                    Tel.:095 1234567</br>
                    email: ileniashop_hotmail.it</br>
                    <img src="mappa.png" />
                </p>    
        </div>
        <!------------------->



        <!--PARTE BOTTONE RICENSIONE-->
        <button id="bottone_recensione">
            <p id="mostra_recensioni"> > Visualizza recensioni degli utenti su di noi</p>
        </button>
        <!------------------------------------>

        

        <!--PARTE VISUALLIZZAZIONE RICENSIONE-->
        <section id="tutte_recensioni">
        </section>
        <!------------------------------------>

@endsection



@section('footer')
@endsection