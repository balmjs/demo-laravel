const Home = () => import('../views/home');
const Login = () => import('../views/login');
const Register = () => import('../views/register');
const NotFound = () => import('../views/not-found');

let baseRoutes = [{
  path: '/home',
  name: 'home',
  component: Home,
  alias: '/'
}, {
  path: '/login',
  name: 'login',
  component: Login
}, {
  path: '/register',
  name: 'register',
  component: Register
}, {
  path: '*',
  component: NotFound
}];

export default baseRoutes;
