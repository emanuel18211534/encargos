// var urlcrud='http://localhost/DemoSari/public/apicrud';

var route = document.querySelector("[name=route]").value;
var urlprod = route + '/apiproductos';
new Vue({
	el:'#productos',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getProductos();
	},

	data:{
		// prueba:'hola mundo'
		productos:[],
		disponible:'disponible'

	},

	methods:{

		getProductos:function(){
			this.$http.get(urlprod)
			.then(function(json){
				this.productos=json.data;

			}).catch(function(json){
				console.log(json);
			});
		},

	// 	eliminar:function(id){

	// 		var resp=confirm("¿estas seguro de eliminar")
	// 		if(resp==true)
	// 		{
	// 			this.$http.delete('http://localhost/DemoSari/public/apicrud/' + id)
	// 			.then(function(json){
	// 			this.getVendedor();
	// 			});
	// 		}

	// 	},

	// 	agregarVendedor:function()
	// 	{
			
	// 		// construir un objeto que necesitamos por el api
	// 		var vendedores={id_vendedor:this.id_vendedor,
	// 			nombre:this.nombre,
	// 			appaterno:this.appaterno,
	// 			apmaterno:this.apmaterno,
	// 			celular:this.celular,
	// 			correo:this.correo}
	// 			// para un metodo store se necesita un post
	// 			this.$http.post(urlcrud,vendedores)
	// 			.then(function(json){
	// 				this.getVendedor();
	// 				// this.limpiar();
	// 			});
	// 	},

	// 	showVendedor:function(id){
	// 		this.$http.get(urlcrud+ '/' + id)
	// 		.then(function(json){
	// 			this.id_vendedor=json.data.id_vendedor;
	// 			this.nombre=json.data.nombre;
	// 			this.appaterno=json.data.appaterno;
	// 			this.apmaterno=json.data.apmaterno;
	// 			this.celular=json.data.celular;
	// 			this.correo=json.data.correo;
	// 		});
	// 	},

	// 	updateVendedor:function(id){
	// 		//crear un json
	// 		var vendedor={nombre:this.nombre,
	// 				appaterno:this.appaterno,
	// 				apmaterno:this.apmaterno,
	// 				celular:this.celular,
	// 				correo:this.correo}

	// 		this.$http.patch(urlcrud+ '/' + id,vendedor)
	// 			.then(function(json){
	// 				this.getVendedor();
	// 		});
	// 	},


		// limpiar:function(){

		// 	this.idcita='';
		// 	this.fecha='';
		// 	this.sintomas='';
		// 	this.diagnostico='';
		// 	this.activo='';
		// }
	}

})