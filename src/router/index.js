import { createRouter, createWebHistory } from 'vue-router'
import LoginView from '../views/Login.vue'
import RegistrationView from '../views/Registration.vue'
import ForgotPassword from '../views/ForgotPassword.vue'

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
  },
  {
    path: '/forgot-password',
    name: ForgotPassword,
    component: ForgotPassword
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
