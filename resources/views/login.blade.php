@extends('layout')



@section('head')  
    <link rel='stylesheet' href="{{ url('css/home.css') }}">
    <link rel='stylesheet' href="{{ url('css/login.css') }}">
    <script src="{{ url('js/login.js') }}" defer></script>
    @parent
@endsection



@section('nav')
@parent
@endsection
        
       
       
@section('header')
@parent
@endsection



@section('contenuto')

  <!--PARTE ERRORE------>
    @if($error=='errore dati')
        <p> errore nella compilazione dei dati </p>
    @endif
  <!-------------------->

      

  <!--PARTE LOGIN DATI-->
      <main>
          <form id="dati_login" action="" name="login" method="POST">
          @csrf
            <p>
              <label>Username</label><input type="text" name="username" >
            </p>
            <p>
              <label>Password</label><input type="password" name="password" >
            </p>
            <p>
              <input type="submit" name="submit" id="submit" value="Login" >
            </p>
          </form>
      </main>


      <div id='registrazione'>
          <a href="{{url('registrazione')}}">Devi ancora registrarti?</a>
      </div>
  <!-------------------->
@endsection
        

@section('footer')
@parent
@endsection