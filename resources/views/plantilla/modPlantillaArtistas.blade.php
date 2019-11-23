<style type="text/css">

    .contenedor-imagenes{
        display:flex;
        width: 100%;

        margin: auto;
        justify-content: space-around;
        flex-wrap: wrap;
        border-radius:50px;
    }

    .contenedor-imagenes .imagen{
        width: 100%;
        position: relative;
        height:350px;
        margin-bottom:5px;
        box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .75)
    }
    .imagen img{
        width: 100%;
        height:100%;
        object-fit: cover;
    }

    .overlay{
        position: absolute;
        bottom: 0;
        left: 0;
        background:rgba(0, 118, 192, 0.781) ;
        width: 100%;
        height: 0;
        overflow: hidden;
        transition: .2s ease;
    }

    .overlay h2{
        color: white;
        font-weight: 300;
        font-size:50px;
        position: absolute;
        top: 50%;
        left:50%;
        text-align: center;
        transform: translate(-50%, -50%);
    }

    .imagen:hover .overlay{
        height:100%;
        cursor: pointer;
    }

    @media screen and (max-width:1000px){
        .contenedor-imagenes{
            width: 95%;
        }
    }

    @media screen and (max-width:700px){
        .contenedor-imagenes{
            width: 90%;
        }
        
    }

    @media screen and (max-width:450px){
        h1{
            font-size:22px;
        }
        
    }

</style>

<!-- EQUIPO -->
<!-- TEXTO CENTRADO Y CON PADDING DE 5 -->
<!-- Bajamos el body para que no se mezcle con el navbar -->


<section class="text-center team bg-info">
    <div class="container">
        <br><br><br>
        
        <!-- Metemos texto centrado y le metemos color al texto -->
        <h1 class="text-center text-white">NUESTRO EQUIPO DE ARTISTAS</h1>


        <div class="contenedor-imagenes">
            <!-- Una fila 3 columnas.... -->
            <div class="row">

                <!-- siempre va a ocupar 3 columnas pantalla grande sera responsive -->
                <!-- Primera imagen -->
                <div class="col-lg-4">
                    <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="https://www.facebook.com/carlos.delgadoalonso.3"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <a href="https://twitter.com/CarlosKapikes"><i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <a href="https://www.instagram.com/kapikes/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                    <div class="card bg-info">
                        <div class="card-body bg-success">
                            <!-- imagen -->
                            <!-- VA A SER RESPONSIVE, REDONDEADA Y ANCHO 50 -->
                            <div class="imagen">
                                
                                <img src="img/sofia8.jpeg" class="img-fluid w-100 h-100">
                                <div class="overlay">
                                    @auth
                                    <a class="overlay" href="{{ url('sofiaFotos') }}">
                                        <h2>GALERIA SOFIA AUTH</h2></a>
                                    @else
                                    <a class="overlay require-login" href="{{ url('sofiaFotos') }}">
                                        <h2>GALERIA SOFIA AUTH</h2></a>
                                    @endauth
                                </div>
                                <br><br>



                                




                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="https://www.facebook.com/carlos.delgadoalonso.3"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <a href="https://twitter.com/CarlosKapikes"><i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <a href="https://www.instagram.com/kapikes/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                    <div class="card bg-info">
                        <div class="card-body bg-success">
                            <!-- imagen -->
                            <!-- VA A SER RESPONSIVE, REDONDEADA Y ANCHO 50 -->
                            <div class="imagen">
                                
                                <img src="img/carlos.jpg" class="img-fluid w-80 h-80">
                                <div class="overlay">
                                    <a href="{{ url('carlosFotos') }}"><h2>GALERIA CARLOS</h2></a>
                                </div>
                                <br><br>
                                




                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="https://www.facebook.com/carlos.delgadoalonso.3"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <a href="https://twitter.com/CarlosKapikes"><i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <a href="https://www.instagram.com/kapikes/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                    <div class="card bg-info">
                        <div class="card-body bg-success">
                            <!-- imagen -->
                            <!-- VA A SER RESPONSIVE, REDONDEADA Y ANCHO 50 -->
                            <div class="imagen">
                                
                                <img src="img/marina2.jpeg" class="img-fluid w-80 h-80">
                                <div class="overlay">
                                    <a id="linkMarina" href="{{ url('marinaFotos') }}"><h2>GALERIA MARINA</h2></a>
                                </div>
                                <br><br>
                                




                            </div>
                        </div>
                    </div>
                </div>
                  

        <!-- una fila con 3 columnas -->


</section>
<br><br>