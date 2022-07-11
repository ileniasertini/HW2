<html>
    <head>
        @section('head')
        <title>Ilenia'Shop</title>
        <script>
            const BASE_URL="{{url('/')}}/";
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Dancing+Script&family=Merriweather:ital,wght@1,300&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">  
        @show
    </head>


    <body>
        <!-----NAV------>
        <nav>
        @section('nav')
            @if($username != null)
                <a href="{{url('home')}}"> Home </a>
                <a href="{{url('prodotti')}}"> Prodotti </a>
                <a href="{{url('contatti')}}"> Chi Siamo </a>
                <a href="{{url('carrello')}}"> Carrello </a>
                <a href="{{url('logout')}}"> Logout </a>
            @else
                <a href="{{url('home')}}"> Home </a>
                <a href="{{url('prodotti')}}"> Prodotti </a>
                <a href="{{url('contatti')}}"> Chi Siamo </a>
                <a href="{{url('login')}}"> Accedi </a>
                <a href="{{url('carrello')}}"> Carrello </a>
            @endif
        @show
        </nav>
        <!--------------->
        
       
        <!-----HEADER------>
        @section('header')
        <div id="overlay">
            <header>
                <h1>Ilenia' s Shop</h1>
            </header>
        </div> 
        @show
        <!--------------->

        

        <!----PARTE NON COMUNE---->
        @yield('contenuto')
        <!----------------->



        <!-----FOOTER------>
        <footer>
        @section('footer')
            <div id="me">
                <p>
                    Ilenia's Shop - via etnea 20, Catania(CT)</br>
                    Tel.:095 1234567</br>
                    email: ileniashop_hotmail.it</br>
                </br>
                ILENIA SERTINI 1000004431
                </p>    
            </div>
        @show
        </footer>
        <!--------------->


    </body>
</html>