import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import { BootstrapVueIcons } from 'bootstrap-vue'
import vuelidate from 'vuelidate'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/swiper-bundle.css'
import AOS from 'aos'
import 'aos/dist/aos.css'

Vue.use(BootstrapVue)
Vue.use(VueAwesomeSwiper)
Vue.use(vuelidate);
Vue.config.productionTip = false;
Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons)

new Vue({
  created (){
    AOS.init()
  },
  router,
  store,
  render: h => h(App)
}).$mount("#app");
