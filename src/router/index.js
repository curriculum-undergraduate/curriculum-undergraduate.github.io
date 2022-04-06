import { createRouter, createWebHistory } from 'vue-router'
import LoginView from '../views/Login.vue'
import RegistrationView from '../views/Registration.vue'

const routes = [
  {
    path: '/',
    name: 'login',
    component: LoginView
  },
  {
    path: '/register',
    name: RegistrationView,
    component: RegistrationView
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
