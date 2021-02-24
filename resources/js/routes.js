import Home from './components/Home';
import About from './components/About';
import NotFound from './components/NotFound';
import LoginRegister from './components/LoginRegister';

export default {
    mode: 'history',

    routes: [

        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Home
        },

        {
            path: '/about',
            component: About,
            name: 'about'
        },

        {
            path: '/login',
            component: LoginRegister,
            name: 'login'
        },
    ]
};