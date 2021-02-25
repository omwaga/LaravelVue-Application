import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';
import NotFound from './components/NotFound';
import Login from './components/Auth/Login';
import Register from './components/Auth/Register';
import Vehicles from './components/Vehicles/Vehicles';
import Companies from './components/Companies/Companies';

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
            component: Login,
            name: 'login'
        },

        {
            path: '/register',
            component: Register,
            name: 'register'
        },

        {
            path: '/vehicles',
            component: Vehicles,
            name: 'vehicles'
        },

        {
            path: '/companies',
            component: Companies,
            name: 'companies'
        },

        {
            path: '/contact-us',
            component: Contact,
            name: 'contact'
        },
    ]
};