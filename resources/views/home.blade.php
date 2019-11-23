@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <h1>VOLVEMOS A LA WEB</h1>

<!--Este boton te lleva a la página de inicio-->
                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
