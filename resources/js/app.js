require('./bootstrap');

require('alpinejs');

import { createApp } from 'vue';
import router from './routes'

import CompaniesIndex from './components/companies/CompaniesIndex.vue';

createApp({
    components: {
        CompaniesIndex
    }
}).use(router).mount('#app')
