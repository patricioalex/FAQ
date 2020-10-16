/**
 * Importando Vue e VueRouter
 * Inserindo VueRouter no Vue
 * 
 */

 import Vue from 'vue'
 import VueRouter from 'vue-router'

 Vue.use(VueRouter)


 /**
  * Importando components
  */
import Home from '../components/home.vue'

 /**
  * Routes
  */

  const routes = [
      {path: '/', component: Home}
  ]

  const router = new VueRouter({
      mode: 'history',
      routes
  })

  export default router