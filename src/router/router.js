import Main from "../pages/Main";
import Auth from "../pages/Auth";
import Applications from "../pages/Applications";
import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        component: Main
    },
    {
        path: '/auth',
        component: Auth
    },
    {
        path: '/applications',
        component: Applications
    }
];

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL)
});

export default router;