@extends('layout')



@section('head')  
    <link rel='stylesheet' href="{{ url('css/home.css') }}">
    <script src="{{ url('js/carrello_upload.js') }}" defer></script>
    @parent
@endsection



@section('nav')
@parent
@endsection
        
       
       
@section('header')
@parent
@endsection

    

@section('contenuto')

        <!--PARTE DEL NON LOGIN-->
        <div id="errore_carrello_visualizza">
            @if($username != null)
                {{$username}}, ecco i tuoi prodotti aggiunti al carrello
            @else
                Devi prima accedere per poter aggiungere contenuti al carrello e visualizzarlo
            @endif
        </div>
        <!------------------------------>



        <!--PARTE VISUALIZZAZIONE ARTICOLI CARRELLO-->
        <section id="section_visualizza_carrello">
        </section>
        <!------------------------------>
@endsection
        

        
@section('footer')
@parent
@endsection