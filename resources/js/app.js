
require('./bootstrap');
import Vrouter from 'vue-router'
window.Vue = require('vue');
import axios from 'axios'

Vue.use(Vrouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import apps from './components/app.vue'
import home from './components/home.vue'
const router  = new Vrouter({
    mode:'hash',
    routes:[
        {
            path:'/create',
            name:'home',
            component:home
        },
        

    ]
});
const app = new Vue({
    
    el: '#app',
    components:{ apps },
    router,
    
});
