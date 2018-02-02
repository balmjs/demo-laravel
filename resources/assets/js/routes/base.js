import Home from '../views/home';
import Login from '../views/login';
import Register from '../views/register';
import NotFound from '../views/not-found';

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
