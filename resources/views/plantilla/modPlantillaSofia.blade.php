<style type="text/css">

.flex-container {
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
}
.flex-container {
 border: 1px solid #555;
 display : -webkit-flex;
 display : -ms-flexbox;
 display : flex;
 padding:20px;
 width:100%; 
 }
 p{
    color:red;
 }

 .img-thumbnail{
    width:50%;
}


  
</style>
<section class="text-center team bg-info">
<br><br><br>
<div class="background-overlay text-white py-5">
                <div class="container">
                    <div class="row d-flex h-100">
                        <!-- OJO columna de 6 de 12 -->
                        <!-- centra el texto verticalmente -->
                        <div class="col-sm-8 text-center justify-content-center align-self-center ">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Realista
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="img/realista.jpg" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Texto de realista</p>

                                          <a href="#" class="btn btn-primary">DETALLE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Acuarela
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="img/acuarela.jpg" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Este estilo de tatuaje está ganando cada día más adeptos, porque los tatuajes de la acuarela imitan un proceso artístico, empleando las salpicaduras y rayas del color para dar la misma impresión que la pintura que es utilizada en lona o papel. El efecto de la acuarela deja un toque característico en la piel, muy diferente a otros tipos de tatuajes. A menudo se emplean colores brillantes y se tratan temas de la naturaleza.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Trival
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="img/trival.jpg" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Uno de los estilos de tatuaje basados en una estética más antigua y ancestral. Casi siempre de color negro, a menudo utilizando simetría y diseño geométrico. El tatuador, además, emplea detalles con extrema precisión y delicadeza. Un tatuaje que ha pasado algo de moda, pero que sigue teniendo seguidores.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                Graffiti
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="img/graffiti.jpg" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>El estilo graffiti o new school es un estilo de tatuaje que utiliza dibujos animados, influenciados por las técnicas y estilos artísticos del graffiti y el hip-hop. Diseños con colores brillantes y características exageradas. Un tipo de tatuaje con un toque juvenil y transgresor.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                Tradicional
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="img/tradicional.jpg" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Los tatuajes old school, en castellano llamado de vieja escuela, recibe este nombre porque se emplean diferentes motivos clásicos o tradicionales, como pueden ser: corazones, anclas, espadas, cartas, serpientes, leones barcos, etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @auth
                            <a id="link-sofia-fotos" href="{{ url('sofiaFotos') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">VEMOS MAS..x..</a>
                            @else
                            @endauth
                        </div>




                        <!-- OJO columna de 6 de 12 -->
                        <div class="col-sm-4">
                            <!-- imagen que aparace en el fondo de la pagina -->
                            <!-- imagen responseive ponemos img-fluid -->
                            <!-- en el archivo main.css esta la imagen de fondo se llama background.jpg  -->
                            <!-- si esta en tañano de pantalla pequeño la imagen desaparece con esta clase -->
                            <img src="img/sofia1.jpeg" class="img-fluid d-none d-sm-block">
                            <h1>CURRICULUM SOFIA</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iusto facilis aperiam tempore itaque vel, doloribus doloremque perferendis odio, mollitia id aspernatur nisi possimus fugit. Quidem sequi vel qui tempore eligendi animi aut corporis autem, enim? Vitae, impedit ipsam rem, doloremque quisquam nisi, voluptas aliquam est delectus quaerat totam omnis.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
</section>