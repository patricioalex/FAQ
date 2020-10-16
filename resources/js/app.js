require('./bootstrap');



/**
 * Importando o VueJs
 */
import Vue from 'vue'

/**
 * Importando o router
 */
import router from './router/router'

/**
 * Componentes global
 */


 /**
  * Id global do VueJs
  */
 const app = new Vue({
     el: "#app",
     router
 })