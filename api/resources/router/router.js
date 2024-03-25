import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '@/views/Home.vue';
import Product from '@/views/Product.vue';
// Importeer andere componenten en views die je wilt gebruiken

Vue.use(VueRouter);

const routes = [
    { path: '/', component: Home },
    { path: '/Product', component: Product },
    // Definieer andere routes hier
];

const router = new VueRouter({
    mode: 'history', // Optioneel: gebruikt HTML5 history API voor "mooie" URLs
    routes
});

export default router;

