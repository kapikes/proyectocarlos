<!DOCTYPE html>
<html lang="es">

@include("inc.headerSection")

<body>
        @include("plantilla.modPlantillaNavbar")
        @yield("modPlantillaNavbar")


        @include("plantilla.modPlantillaSofia")
        @yield("modPlantillaSofia")
        
        
        @include("plantilla.modPlantillaPie")
        @yield("modPlantillaPie")






</body>
@include("inc.footerScripts")
</html>