import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../pages/Home.vue'
import ExamplePage1 from '../pages/ExamplePage1.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/example-page1',
    name: 'ExamplePage1',
    component: ExamplePage1
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
