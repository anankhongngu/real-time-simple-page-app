import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Login from '../components/login/Login'
import Logout from '../components/login/Logout'
import SignUp from '../components/login/signUp'
import Forum from '../components/forum/forum'

const routes = [
  { path: '/login', component: Login },
  { path: '/logout', component: Logout },
  { path: '/signup', component: SignUp },
  { path: '/forum', component: Forum, name: 'forum'}

]

const router = new VueRouter({
  routes, // short for `routes: routes`
  hasbang: false,
  mode: 'history',
})


export default router