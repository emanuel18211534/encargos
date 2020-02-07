@extends ('layouts.administrador')

@section ('titulo','Administrador')

@section('contenido')

<div id="productos">
	<div class="container">
		<br>
		<br>
    <div class="row">
     <!--  <div class="col-xs-8">
        <label class="glyphicon glyphicon-search">Buscar</label>
        <input type="text" placeholder="Escriba la clave o el nombre del producto" class="form-control" v-model="buscar">
  
      </div> -->
        <div class="col-xs-4">
          <br>

          <button class="btn btn-success pr"  >Agregar nuevo producto</button>

        </div>



    </div>
		@{{disponible}}
		<br><br>
		
		<table class="table table-hover">
            <thead>
              <!-- <th class="warning">NO</th> -->
              <th class="warning">imagen</th>
              <th class="warning">Nombre</th>
              <th class="warning">Descripcion</th>
              <th class="warning">Disponibles</th>
              <th class="warning">Precio</th>
              <th class="warning">Disponibles</th>
              <th class="warning">Opciones</th>
             
            </thead>
            <tbody>
              <tr v-for="prod in productos" >
                <td class="warning">@{{prod.foto}}</td>
                <td class="warning">@{{prod.nombre}}</td>
                <td class="warning">@{{prod.descripcion}}</td>
                <td class="warning">@{{prod.stock}}</td>
                <td class="warning">$ @{{prod.precio}}</td>
                <td class="warning">
                  <span class="label label-success">@{{disponible}}</span>
                </td>
                <td class="warning">
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
  <script src="js/productos/productos.js"></script>
  
@endpush
<input type="hidden" name="route" value="{{url('/')}}">