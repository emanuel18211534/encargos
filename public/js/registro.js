var route='http://localhost/encargos/public/';
var urlUser= route + 'apiusuario';

// var route = document.querySelector("[name=route]").value;
// var urlUser = route + '/apiusuario';

new Vue({
	el:'#register',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		email:'',
		password1:'',
		nombre:'',
		id_rol:2
		
	},

	methods:{
		guardarUser:function(){
				var data = new FormData();
				data.append('email',this.email);
				data.append('password2',this.password1);
				data.append('nombre',this.nombre);
				data.append('id_rol',this.id_rol);

				this.$http.post(urlUser,data)
				.then(function(json){
				 alert('usuario agregado');
				}).catch(function(json){
					console.log(json);
				})
		}
	}

})