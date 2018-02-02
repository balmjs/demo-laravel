const UserIndex = () => import('../views/user/index');
const UserList = () => import('../views/user/list');
const UserCreate = () => import('../views/user/create');

let userRoutes = [{
  path: '/user',
  name: 'user',
  component: UserIndex,
  redirect: '/user/list',
  children: [{
    path: 'list',
    name: 'user.list',
    component: UserList
  }, {
    path: 'create',
    name: 'user.create',
    component: UserCreate
  }]
}];

export default userRoutes;
