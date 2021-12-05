function init() {

var apiEspecie='http://localhost/Mascotas_PechNabte/public/apiEspecie';

new Vue ({
	el:'#apiEspecies',

	data:{
		mensaje:'HOLA MUNDO CRUEL',
		especies:[],

	},
      
      //se ejecuta automaticamente cuando la pagina se crea
      created:function(){
      	this.getEspecies();

      },

      //inicio de methods
	methods:{
		getEspecies:function(){
			this.$http.get(apiEspecie).then(function(json){
				this.especies=json.data;

			})

		}

	},
	//fin de methods

	computed:{

	},
})

}window.onload = init;