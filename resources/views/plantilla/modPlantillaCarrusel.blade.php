<style type="text/css">
    a{
        margin-bottom: 40px;
        border-radius: 8px;
    }
</style>

<!-- SI EL CARRUSEL LO QUEREMOS CON MARGENES LO TENEMOS QUE ENCERRAR EN UN CONTENEDOR Y FLUID -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <!-- LE ESTOY METIENDO UN ALTO FIJO DE 95 -->

        <div class="carousel-item active" style="height: 100vh">

            <img class="d-block w-100" src="img/manos.jpg" height="1000" width="100" alt="First slide">

            <div class="carousel-caption d-none d-md-block">
                <h5>NUESTRO ESTUDIO  A TU DISPOSIÓN</h5>
                
                <a class="btn btn-primary" href="{{ url('dondeEstamos') }}" role="button">DONDE ESTAMOS</a>
                

            </div>
        </div>
        <!-- LE ESTOY METIENDO UN ALTO FIJO DE 95 -->
        <div class="carousel-item" style="height:100vh">
            <img class="d-block w-100" src="img/hands-3444087_1920.jpg" height="1271" width="1920" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>TATTOO LASER</h5>
                
                <a class="btn btn-primary" href="{{ url('enQueConsiste') }}" role="button">EN QUE CONSISTE</a>
            </div>
        </div>

        <!-- LE ESTOY METIENDO UN ALTO FIJO DE 95 -->
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="img/adult2.jpg" height="1280" width="1920" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>TRES ARTISTAS A TU SERVICIO</h5>
                
                <a class="btn btn-primary" href="{{ url('artistas') }}" role="button">ARTISTAS</a>
            </div>
        </div>
    </div>
    <!-- FLECHA  -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <!-- FLECHA DE SIGUIENTE -->
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- FIN DEL CARRUSEL -->