/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from "vue-router";
import VueI18n from 'vue-i18n';
import {messages} from './translations.js'
import {Form, HasError, AlertError} from 'vform'
import moment from 'moment';


window.Vue = require('vue');
Vue.use(VueRouter, messages);
window.Fire = new Vue();
Vue.use(VueI18n);
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.Form = Form;

const i18n = new VueI18n({
    locale: 'ar', // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
});


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('side-bar', require('./components/SideBar.vue').default);
// Vue.component('header', require('./components/Header.vue').default);
Vue.component('job', require('./components/general/jobs.vue').default);
Vue.component('cv', require('./components/general/Cv.vue').default);
Vue.component('home-member', require('./components/cms/Home.vue').default);
Vue.component('adv-index', require('./components/general/adv/Index.vue').default);
Vue.component('show-ad', require('./components/general/adv/Show.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
let routes = [
    // {path: '/details/:code', component: require('./components/DetailsTransaction.vue').default, name: 'details'},
    {path: '/view-job/:id', component: require('./components/job/View.vue').default, name: 'view_job'},
    {path: '/change-password', component: require('./components/ChangePassword.vue').default},
    {path: '/jobs', component: require('./components/job/JobOpportunity.vue').default},
    // {path: '/job', component: require('./components/general/jobs.vue').default},
    {path: '/cvs', component: require('./components/Cv.vue').default},
    {path: '/notifications', component: require('./components/Message.vue').default},
    {path: '/home', component: require('./components/Home.vue').default},
    {path: '/profile', component: require('./components/Profile.vue').default},
    {path: '/create-cv', component: require('./components/CreateCv.vue').default, name: 'create-cv'},
    {path: '/categories-ad', component: require('./components/adv/CategoriesAds.vue').default, name: 'categories-ad'},
    {path: '/create-job', component: require('./components/job/CreateOpportunity.vue').default, name: 'create-job'},
    {path: '/general_jobs', component: require('./components/general/Cv.vue').default, name: 'general_jobs'},
    {path: '/show-ad/:id', component: require('./components/general/adv/Show.vue').default, name: 'show-ad'},
    {path: '/cv', component: require('./components/general/Cv.vue').default},
    {path: '/create-ad', component: require('./components/adv/Create.vue').default},
    {path: '/member-category', component: require('./components/cms/category/Category.vue').default},
    {path: '/member-property', component: require('./components/cms/category/Property.vue').default},
    {path: '/ads', component: require('./components/adv/Index.vue').default},
];
// let general_routes = [
//     // {path: '/jobs/:id', component: require('./components/job/View.vue').default, name: 'view_job'},
//     {path: '/general_jobs', component: require('./components/general/jobs.vue').default, name: 'general_jobs'},
// ];

Vue.filter('myDate', function (created) {
    return moment(created).format('MMMM Do YYYY');
});

const router = new VueRouter({
    mode: "history",
    routes
});
// const general_router = new VueRouter({
//     mode: "history",
//     general_routes
// });
// router.beforeEach((to, from, next) => {
//     let language = to.params.lang;
//     if (!language) {
//         language = 'en';
//         i18n.local = language;
//         next();
//     }
// });
i18n.locale = 'ar';
// if (document.getElementById("#app")) {
if (document.getElementById("#general")) {
    const app1 = new Vue({
        router,
        i18n,
    }).$mount('#general');
}
const app = new Vue({
    i18n,
    router,
    data() {
        return {
            val: '',
            id: ''
        }
    },
    methods: {
        setLang() {
            Fire.$emit('local');
        },
    },
    created() {
        Fire.$on('local', () => {
            i18n.locale = this.val;
            console.log(this.val)
        });
    }
}).$mount('#app');
// }



