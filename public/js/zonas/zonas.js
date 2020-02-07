var ruta2 = 'http://localhost/DemoSari/public/apizona';
new Vue({
	el:'#zona',

	data:{
		nombre:'Hola mundo',
		zonas:[],
		buscar:'',
	},

	created:function(){
		this.getzonas();
	},

	methods:{
		getzonas:function(){
			this.$http.get(ruta2)
			.then(function(json){
				this.zonas = json.data;
			})
		}
	},

	computed:{
		filtroZonas:function(){
			return this.zonas.filter((zona)=>{
				return zona.nombre.toLowerCase().match(this.buscar.trim());
			});
		}
	}




})