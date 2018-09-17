
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import Vuesax from 'vuesax'

import 'vuesax/dist/vuesax.css' //Vuesax styles
Vue.use(Vuesax)
import Vue from 'vue'


// entirely import
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)

import { DataTables, DataTablesServer } from 'vue-data-tables'
Vue.use(DataTables)
Vue.use(DataTablesServer)

import VueDataTables from 'vue-data-tables'
Vue.use(VueDataTables)

// set language to EN
import lang from 'element-ui/lib/locale/lang/en'
import locale from 'element-ui/lib/locale'

locale.use(lang)

import Datatable from 'vue2-datatable-component'

Vue.use(Datatable)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('loading-component', require('./components/partials/LoadingComponent.vue'));
Vue.component('sidebar-component', require('./components/partials/SidebarComponent.vue'));
Vue.component('map-component', require('./components/MessageInbox/InboxComponent.vue').default);
Vue.component('welcome-button', require('./components/partials/WelcomeButton.vue'));
Vue.component('datatable-componenet', require('./components/partials/DatatableComponent.vue'));

const app = new Vue({
    el: '#app',
      data: {
        place: '',
      },
    });


const route = [
    {path: '/inbox', component: PrivateMessageInbox, name: 'inbox', meta: { requiresAuth: true}}

]
