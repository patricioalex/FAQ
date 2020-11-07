require('./bootstrap');



/**
 * Importando o VueJs
 */
import Vue from 'vue'

/**
 * Importando o router
 */
import router from './router'

/**
 * Componentes globais
 */

Vue.component('pesquisar', require('./components/Home/Pesquisar.vue').default);
Vue.component('LoadPage', require('./components/load/Loading.vue').default);
Vue.component('Load', require('./components/load/load.vue').default);

 /**
  * Id global do VueJs
  */
 const app = new Vue({
     el: "#app",
     router
 })