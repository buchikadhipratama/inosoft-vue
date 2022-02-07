require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './router/index';
import store from './store/index';
import App from './App.vue';
import excel from 'vue-excel-export';

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import specific icons */
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { faCaretUp } from '@fortawesome/free-solid-svg-icons'
import { faCaretDown } from '@fortawesome/free-solid-svg-icons'
import { faGauge } from '@fortawesome/free-solid-svg-icons';
import { faCompass } from '@fortawesome/free-solid-svg-icons';
// import { faUserHel } from '@fortawesome/free-solid-svg-icons';

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* add icons to the library */
library.add(faUserSecret)
library.add(faCaretUp)
library.add(faCaretDown)
library.add(faGauge)
library.add(faCompass)
// library.add(faUserHelmetSafety)

/* add font awesome icon component */
Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

Vue.use(VueRouter);
Vue.use(excel)

const app = new Vue({
    el: '#app',
    router,
    store,
    components: { App }
})
