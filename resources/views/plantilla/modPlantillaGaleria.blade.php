<style type="text/css">
    .gallery-block{
        padding-bottom: 60px;
        padding-top: 10px;
    }

    .gallery-block .heading{
        margin-bottom: 50px;
        text-align: center;
    }

    .gallery-block .heading h2{
        font-weight: bold;
        font-size: 1.4rem;
        text-transform: uppercase;
    }

    .gallery-block.compact-gallery .item{
        overflow: hidden;
        margin-bottom: 0;
        background: black;
        opacity: 1;
    }

    .gallery-block.compact-gallery .item .image{
        transition: 0.8s ease;
    }

    .gallery-block.compact-gallery .item .info{
        position: relative;
        display: inline-block;
    }

    .gallery-block.compact-gallery .item .description{
        display: grid;
        position: absolute;
        bottom: 0;
        left: 0;
        color: #fff;
        padding: 10px;
        font-size: 17px;
        line-height: 18px;
        width: 100%;
        padding-top: 15px;
        padding-bottom: 15px;
        opacity: 1;
        color: #fff;
        transition: 0.8s ease;
        text-align: center;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.39));
    }

    .gallery-block.compact-gallery .item .description .description-heading{
        font-size: 1em;
        font-weight: bold;
    }

    .gallery-block.compact-gallery .item .description .description-body{
        font-size: 0.8em;
        margin-top: 10px;
        font-weight: 300;
    }

    @media (min-width: 576px) {

        .gallery-block.compact-gallery .item .description {
            opacity: 0; 
        }

        .gallery-block.compact-gallery .item a:hover .description {
            opacity: 1; 
        } 

        .gallery-block .zoom-on-hover:hover .image {
            transform: scale(1.3);
            opacity: 0.7; 
        }
    }




</style>

<!--Carousel Wrapper-->

<section class="gallery-block compact-gallery badge-info">
    <div class="container ">
        <div class="heading">
            <br><br><br><br>
            <h2>GALERIA DE TODO</h2>
        </div>

        <div class="row no-gutters">

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/1.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/1.jpg">
                    <span class="description">

                        <span class="description-heading">TATUAJE ACUARELA</span>
                        <span class="description-body">Cada vez mas de moda, imitan proceso artistico, usan colores brillantes y pueden tratar temas de naturaleza.</span>
                    </span>
                </a>
            </div>


            




            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/4.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/4.jpg">
                    <span class="description">
                        <span class="description-heading">CORAZONES</span>
                        <span class="description-body">Mas de moda, con diferentes tamaños, fomas y estilos, representan el AMOR.</span>
                    </span>
                </a>
            </div>


            


            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/6.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/6.jpg">
                    <span class="description">
                        <span class="description-heading">DOTWORD</span>
                        <span class="description-body">También llamado punteado, mas modernos, usa puntos diminutos y se crean formas, basado en el impresionismo.</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/7.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/7.jpg">
                    <span class="description">
                        <span class="description-heading">ESCRITOS</span>
                        <span class="description-body">Muy popular y comun, con muchas variantes, poco exagerados, frases representativas, caligrafia a mano, por regla general....</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/8.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/8.jpg">
                    <span class="description">
                        <span class="description-heading">FLECHAS</span>
                        <span class="description-body">Muy de moda, se pueden combiar con otras dibujos para mejorar, puede tener diferentes significados, por lo general son sueños, objetivos a seguir, etc...</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/9.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/9.jpg">
                    <span class="description">
                        <span class="description-heading">GEOMETRICOS</span>
                        <span class="description-body">Estan de moda, diseños dificiles, con geometria, con un final llamativo, el color predominante el negro y también puede hacer efecto 3D.</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/10.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/10.jpg">
                    <span class="description">
                        <span class="description-heading">GLIFOS</span>
                        <span class="description-body">Son signos grabados, escritos, pintados, usados en diferentes culturas, como joroglíficos, se usan para cualquier parte del cuerpo, pero en pequeñas dimensiones.</span>
                    </span>
                </a>
            </div>


            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/11.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/11.jpg">
                    <span class="description">
                        <span class="description-heading">GOTICOS</span>
                        <span class="description-body">Estilo de vida underground más que gotico, aporta oscuridad, tristeza y suelen tener tema de muerte.</span>
                    </span>
                </a>
            </div>


            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/12.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/12.jpg">
                    <span class="description">
                        <span class="description-heading">GRAFFITI</span>
                        <span class="description-body">Tambien llamado "new scholl", usa dibujos animados, tiene infuencia del graffiti y hip-hop, colores brillantes y exagerados, es transgresor.</span>
                    </span>
                </a>
            </div>

            


            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/14.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/14.jpg">
                    <span class="description">
                        <span class="description-heading">JAPONES</span>
                        <span class="description-body">De los más antiguos, cubren grandes partes del cuerpo, dan una imagen tradicional japonesa, como flores, dragones, geishas, etc...</span>
                    </span>
                </a>
            </div>


            

            

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/17.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/17.jpg">
                    <span class="description">
                        <span class="description-heading">NEOTRADICIONAL</span>
                        <span class="description-body">Usan contornos en negrita, sobreado delicado, son mucho mas detallados y experimentados, mas brillantes y una tecnica más tradicional.</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/18.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/18.jpg">
                    <span class="description">
                        <span class="description-heading">NUMEROS ROMANOS</span>
                        <span class="description-body">Muy popular, con tradición histórica y estetica muy bonitos</span>
                    </span>
                </a>
            </div>

            


            


            


            

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/25.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/25.jpg">
                    <span class="description">
                        <span class="description-heading">TRADICIONAL U OLD SCHOOL</span>
                        <span class="description-body">Motivos clasicos y tradicionales (corazones, anclas, espadas, leones, etc...)</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/26.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/26.jpg">
                    <span class="description">
                        <span class="description-heading">TRIVAL</span>
                        <span class="description-body">De una estetica antigua, predomina el negro, con geometria y simetria, detalle, precisión en los dibujos, no es moderno pero sigue teniendo sus seguidores.</span>
                    </span>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="img/fotosGaleria/28.jpg">
                    <img class="img-fluid image" src="img/fotosGaleria/28.jpg">
                    <span class="description">
                        <span class="description-heading">REALISTA</span>
                        <span class="description-body">De una imagen muy real, parecen casi una fotografia, son obras maestras, pueden ser también cuadros de pintura, personajes, etc....</span>
                    </span>
                </a>
            </div>

            
        </div>
    </div>
</section>