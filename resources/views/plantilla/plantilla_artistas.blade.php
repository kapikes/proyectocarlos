<!DOCTYPE html>
<html lang="es">

@include("inc.headerSection")

<body>
        @include("plantilla.modPlantillaNavbar")
        @yield("modPlantillaNavbar")


        @include("plantilla.modPlantillaArtistas")
        @yield("modPlantillaArtistas")


        @include("plantilla.modPlantillaPie")
        @yield("modPlantillaPie")




</body>
@include("inc.footerScripts")
</html>