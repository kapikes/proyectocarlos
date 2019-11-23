<!DOCTYPE html>
<html lang="es">

@include("inc.headerSection")

<body>
        @include("plantilla.modPlantillaNavbar")
        @yield("modPlantillaNavbar")


        @include("plantilla.modPlantillaContacto")
        @yield("modPlantillaContacto")
        
        
        @include("plantilla.modPlantillaPie")
        @yield("modPlantillaPie")



</body>
@include("inc.footerScripts")
</html>