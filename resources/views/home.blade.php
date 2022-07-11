@extends('layout')



@section('head')  
    <link rel='stylesheet' href="{{ url('css/home.css') }}">
    <script src="{{ url('js/api_spotify.js') }}" defer></script>
    <script src="{{ url('js/api_email.js') }}" defer></script>
    <script src="{{ url('js/home_upload.js') }}" defer></script>
    <script src="{{ url('js/recensione_aggiungi.js') }}" defer></script>
    @parent
@endsection



@section('nav')
@parent
@endsection
        
       
       
@section('header')
@parent
@endsection

    

@section('contenuto')
        <!-----PARTE API SPOTIFTY------>
        <form id="spotify_box" class="spotify" >
            <h3>Prova a vincere un album del tuo CANTANTE PREFERITO!</h3>
            <h3>In collaborazione con <em>MondadoriStore</em></h3>
            <p>Inserisci nome cantante</p>
            <input type="text" id="cantante"></input> 
            <input type="submit" id="submit_spotify" value="cerca" ></input>
            
        </form>
    
        
        <a id="spotify_vinto" class='spotify_nascosto' href='https://www.mondadoristore.it/'> Clicca qui per riscuotere il tuo premio </a>
            
        <div id="album_view">
        </div>
        <!--------------------------->
        



        <!------PARTE BENVENUTO------>
        <div id="intestazione_home">
            <h1>Alcune novità del mese!
            @if($username != null)
                Benvenuta/o {{$username}}
            @endif
            </h1>
        </div>
        <!---------------------->




        <!--PARTE VISUALIZZAZIONE NOVITA-->
        <section id="section_home">
        </section>
        <!-------------------------------> 



        
        
        <!--PARTE RECENSIONE-->
        <div id="recensioni_risposta">
        </div>
            

        <section id="section_recensioni">
            <form id="recensioni" method="get">
                <h3>LASCIA UNA RECENSIONE!</h3>
                <p>La tua opinione è importante per noi :)</p>
                <textarea id="recensione_utente" style="width: 600px; height= 90px"></textarea> 
                <input type='submit' id="recensione_invio"></input>
            </form>
        </section>
        <!---------------------->



        
        <!--PARTE API EMAIL-------->
        <form id="email_box" >
            <h3>CREA UN TUO ACCOUNT</h3>
            <p>Inserisci email </p>
            <input type="text" id="email"></input> 
            <input type='submit'></input>
        </form>

        <div id="email_error">
        </div>

        <a id="email_okk" class="class_email_ok" class="class_email_ok_2" 
        href="{{url('registrazione')}}"> <em>Email valida</br>Clicca qui per completare la tua iscrizione</em></a>
        <!---------------------->

@endsection
        


@section('footer')
@parent
@endsection