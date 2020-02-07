
var route = document.querySelector("[name=route]").value;
var urlUsuario = route + '/apiusuario';

new Vue({
	el:'#usuarioss',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getUsuario();
	},

	data:{
		prueba:'HOLA MUNDO',
		usuarios:[],
		buscar:''
		
	},

	methods:{
		getUsuario:function(){
				this.$http.get(urlUsuario)
			.then(function(json){
				this.usuarios=json.data;

			}).catch(function(json){
				console.log(json);
			});
		}
	},
	//fin de los metodos
	computed:{
		filtroProductos:function(){
			return this.usuarios.filter((usuario)=>{
				return usuario.nombre.toLowerCase().match(this.buscar.trim()) ||
				usuario.rol.rol.match(this.buscar.trim());
			});
		}
	}

})