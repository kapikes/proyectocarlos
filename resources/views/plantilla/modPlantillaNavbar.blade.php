<style type="text/css">

    nav{
        height: 10%;
        width:100%;
        position:fixed;
        background-color: green;
    }

    input.nav-link{border:0; background-color:green;  color:#000; cursor:pointer;}
    
    

</style>

<nav id="main-header-navbar" class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top">
    <div class="container">

        <a class="navbar-brand" href="#"><img src="img/logoKAPIKES.png" style="width: 15%;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" float:right;>
                <li class="nav-item active">

                    <a class="nav-link" href="{{ url('/') }}">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('artistas') }}">EQUIPO</a>
                </li>
<!-- desaparece este boton cuando el usuario que navega ESTA REGISTRADO -->
<!-- quiero hacerlo al reves.... -->
                <!-- Si el usuario esta autenticado entras en galeria...sino queda el boton deshabilitado....... y no puedes ver la pantalla de galeria-->
                <li class="nav-item">
                    @auth
                    <a class="nav-link" href="{{ url('galeria') }}">GALERIA</a>
                    @else
                    <!--<a id="link-disabled-gallery" class="nav-link" href="{{ url('login') }}">GALERIA</a>-->
                    <input type="submit" name="enviar" value="GALERIA" class="nav-link require-login" />
                    @endauth
                </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contacto') }}">CONTACTO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('artistas') }} id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ARTISTAS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('Sofia') }}">Sofia</a>
                        <a class="dropdown-item" href="{{ url('Marina') }}">Marina</a>
                        <a class="dropdown-item" href="{{ url('Carlos') }}">Carlos</a>
                    </div>
                </li>
                <li>
                    @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a> | 
                <a id="lnk-logout" href="{{ url('logout') }}">Logout</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
                </li>
                @auth
                <li>
                    <p>¡¡¡ HOLA !!! </p>{{ auth()->user()->name }}
                </li>
                @endauth
            </ul>


        </div>


    </div>


</nav>
