import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../pages/Home.vue'
import CompletedInstruction from '../pages/CompletedInstruction.vue'
import ExamplePage1 from '../pages/ExamplePage1.vue'
import DetailInstruction from "../pages/DetailInstruction";
import CreateInstruction from "../pages/CreateInstruction.vue";
import ServiceInstruction from "../pages/ServiceInstruction.vue"
import LogisticInstruction from "../pages/LogisticInstruction.vue"

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/1',
    name: 'CompletedInstruction',
    component: CompletedInstruction
  },
  {
      path: '/create-instruction',
      name: 'CreateInstruction',
      component: CreateInstruction
  },
  {
      path: '/det',
      name: 'DetailInstruction',
      component: DetailInstruction
  },
  {
    path: '/example-page1',
    name: 'ExamplePage1',
    component: ExamplePage1
  },
  {
    path: '/service-instruction',
    name: 'ServiceInstruction',
    component: ServiceInstruction
  },
  {
    path: '/logistic-instruction',
    name: 'LogisticInstruction',
    component: LogisticInstruction
  },
]

const router = new VueRouter({
    // mode: history,
    base: process.env.BASE_URL,
    routes
})

export default router
