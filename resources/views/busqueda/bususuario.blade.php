@extends ('layouts.administrador')

@section ('titulo','Administrador')

@section('contenido')

<div id="usuarioss">
	<div class="container">
		<br>
		<br>
    <div class="row">
      <div class="col-xs-8">
        <label class="glyphicon glyphicon-search">Buscar</label>
        <input type="text" placeholder="Escriba la clave o el nombre del producto" class="form-control" v-model="buscar">
  
      </div>
        <div class="col-xs-4">
          <br>

          <button class="btn btn-success" >Agregar nuevo usuario</button>
        </div>

    </div>
		
		<br><br>
		
		<table class="table table-hover">
            <thead>
              <th class="warning">NO</th>
              <th class="warning">Nombres</th>
              <th class="warning">Apellido paterno</th>
              <th class="warning">Apellido materno</th>
              <th class="warning">Rango</th>
              <th class="warning">Opciones</th>
             
            </thead>
            <tbody>
              <tr v-for="(usuario,index) in filtroProductos" >
                <td class="success">@{{index+1}}</td>
                <td class="success">@{{usuario.nombre}}</td>
                <td class="success">@{{usuario.appaterno}}</td>
                <td class="success">@{{usuario.apmaterno}}</td>
                <td class="success">@{{usuario.rol.rol}}</td>
                <td class="success">
                  <span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarvendedor" ></span>
                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger"></span>
                </td>
              </tr>
            </tbody>
          </table>
  </div>
</div>

@endsection

@push('scripts')

  <script src="js/vue-resource.js"></script>
  <script src="js/busqueda/bususuario.js"></script>
  
@endpush
<input type="hidden" name="route" value="{{url('/')}}">