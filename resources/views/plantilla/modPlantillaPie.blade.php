<style type="text/css">
  footer {
    background-color:#1A1A1A;
    height: 7%;
    width:100%;
    bottom:0;
    position:fixed;
    color: white;
    
    text-align: center;
  }
</style>

<!--Este es el cuadro de dialogo que nos sale para habilitar la GALERIA-->
<div id="register-modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quieres ver la galería?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Para ver la galería tienes que estar registrado</p>
      </div>




      <div class="modal-footer">
        <a href="{{ url('login') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LOGIN</a>
        <a href="{{ url('register') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">REGISTRO</a>
      </div>
    </div>
  </div>
</div>




<footer>
  
  
  <p>Derechos Reservados  ||  Carlos Delgado </p>


  
  

</footer>

<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>