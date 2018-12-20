import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)
import Login from '../components/login/Login'
import Logout from '../components/login/Logout'
import Signup from '../components/login/signup'
import Forum from '../components/pubs/forum'
import Read from '../components/pubs/read'
import Create from '../components/pubs/create'
import Pubs from '../components/pubs/pubs'
import Details from '../components/pubs/details'
import CreateCategory from '../components/category/CreateCategory'


const routes = [
    { path: '/login', component: Login },
    { path: '/logout', component: Logout },
    { path: '/signup', component: Signup },
    { path: '/category', component: CreateCategory },
    { path: '/pubs', component: Pubs, name: 'pubs' },
    { path: '/pub/:id', component: Details, name: 'details' },
    { path: '/pub/:id/forum', component: Forum, name: 'forum' },
    { path: '/pub/:id/forum/ask', component: Create },
    { path: '/pub/:id/question/:slug', component: Read, name: 'read' },
  ]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history'
})

export default router