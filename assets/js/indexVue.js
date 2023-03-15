import Vue from "./vueJsFramework.js";
const app = new Vue({
  el: "#app",
  data() {
    return {
      posFrota: 0,
      posCava: 0,
      posFeatico: 0,
      posPocos: 0,
      posTanques: 0,
      rowsFrota: [],
      rowsCava : [],
      rowsFreatico: [],
      rowsPocos : [],
      rowsTanques: [],
      resultsFrota:'',
      resultsCava:'',
      resultsFreatico:'',
      resultsPocos:'',
      resultsTanques:'',
      message:'',
    };
  },
  methods: {
  
    getImagens() {

        const url = `https://www.rdppetroleo.com.br/BioPreserve/site/listar.php`
        //const url = `../../listar.php`
    
        axios
          .get(
            url
            

          )
          .then((res) => {
            console.log(res)
             this.rowsFrota = res.data.rowsFrota
             this.rowsCava = res.data.rowsCava
             this.rowsFreatico = res.data.rowsFreatico
             this.rowsPocos = res.data.rowsPocos
             this.rowsTanques = res.data.rowsTanques
             this.resultsFrota = res.data.resultsFrota
             this.resultsCava = res.data.resultsCava
             this.resultsFreatico = res.data.resultsFreatico
             this.resultsPocos = res.data.resultsPocos
             this.resultsTanques = res.data.resultsTanques
 

          })
          .catch((err) => {
            console.log(err);
          });
   
    },
    enviarInformacoes(){

         const formEnviarInformacoes = document.getElementById("formEnviarInformacoes")
         const formData = new FormData(formEnviarInformacoes)

          axios
          .post(
            `../../newsletter/newsletter.php`,
             formData

          )
          .then((res) => {
       

          })
          .catch((err) => {
            console.log(err);
          });

    },
    mudarImagem(){

      this.imagem = this.imagens[pos]
    },
    abrirModal(p1){

      const visualizarCaixaDiario = new bootstrap.Modal(document.getElementById(p1))
      visualizarCaixaDiario.show();
    }
    
  },
  watch:{


  },
  mounted: function () {

    this.getImagens();

  },
});
