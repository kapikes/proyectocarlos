<h1>CONTACTO</h1>

  <div class="container">
  <div class="row">
    <div class="col-md-5">
      <h2>Enviar formulario</h2>


      <form  action="{{ route('contacto') }}" method="POST">
        <div class="form-group">
          Nombre:<input name="name" placeholder="Asunto...."  value="{{ old('name')}}" class="form-control">
          {!! $errors->first('name','<small>:message</small><br>') !!}
        </div>
        <div class="form-group">
          Email:<input type="email" name="email" placeholder="Email...."  class="form-control">
          {!! $errors->first('email','<small>:message</small><br>') !!}
        </div>
        <div class="form-group">
          Asunto:<input name="subject" placeholder="Asunto...."  class="form-control">
          {!! $errors->first('subject','<small>:message</small><br>') !!}
        </div>
        <div class="form-group">
          Comentario:<textarea name="content" placeholder="texto" class="form-control"></textarea>
          {!! $errors->first('content','<small>:message</small><br>') !!}
        </div>
        <div class="form-group">
          <button>ENVIAR</button>
        </div>
        @csrf
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
      </form>
    </div>
  </div>
</div>