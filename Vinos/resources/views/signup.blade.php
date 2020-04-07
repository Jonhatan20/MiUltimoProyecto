@extends('layouts.main',['titulo'=>'Registro'])

@section('section')
  <h1 class="h3 mb-4 text-gray-800">
    Registro de Usuarios
  </h1>
  @if($mensaje = Session::get('Listo'))
    <div class="alert alert-success alert-block">
      <strong>{{ $mensaje }}</strong>
    </div>
  @endif
  @if($errors->any())
    <div class="col-12 alert alert-danger alert_dismissable fade show">
      <h5>Error:</h5>
      <ul class="form-group">
        @foreach ($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="row">
    <form action="/signup" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="name">
      </div>
      <div class="form-group">
        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="email">
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="pass1" placeholder="password">
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="pass2" placeholder="confirm password">
      </div>
      <select class="form-group" name="nivel">
        <option value="{{ old('nivel') }}">Admin</option>
        <option value="{{ old('nivel') }}">Chalan</option>
      </select>
      <div class="form-group">
        <input class="form-control" type="file" name="img" value="{{ old('img') }}" placeholder="imagen de perfil">
      </div>
        <br>
        <button class="btn btn-primary">
          Registrar
        </button>
    </form>
  </div>

@endsection

@section('scripts')
  <script type="text/javascript">
    console.log("HOLA")
  </script>
@endsection
