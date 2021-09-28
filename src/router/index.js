import Vue from "vue";
import VueRouter from "vue-router";
import Registration from "../views/Registration.vue";
import Services from "../views/Services.vue";
import WeddingHalls from "../components/Local/weddingHalls";
import WeddingPlanner from "../components/Local/WeddingPlanner.vue";
import Cars from "../components/Local/cars.vue";
import Photographers from "../components/Local/photographers.vue";
import mkpartst from "../components/Local/Make-upArtist.vue";
import Req from "../components/Local/RequestButton.vue";
import profile from "../views/profile.vue";
import profile2 from "../views/profile2.vue";
import profile3 from "../views/profile3.vue";
import profile4 from "../views/profile4.vue";
import profile5 from "../views/profile5.vue";
import activities from "../views/activities.vue";
import Orders from "../views/Orders.vue";
import BusinessMain from "../views/MainB.vue";
import ClientMain from "../views/MainC.vue";
import PageNotFound from "../views/PNF.vue";
Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Registration,
  },
  {
    path: "/services",
    name: "Services",
    component: Services,
  },
  {
    path: "/aboutus",
    name: "AboutUs",
  },
  {
    path: "/services/weddinghalls",
    name: "Halls",
    component: WeddingHalls,
  },
  {
    path: "/services/weddingplanner",
    name: "planners",
    component: WeddingPlanner,
  },
  {
    path: "/services/cars",
    name: "Cars",
    component: Cars,
  },
  {
    path: "/services/photographers",
    name: "Photographers",
    component: Photographers,
  },
  {
    path: "/services/make-up_artist",
    name: "Make-up_Artist",
    component: mkpartst,
  },
  {
    path: '/business',
    name: 'Business',
    component: BusinessMain
  },
  {
    path: '/client',
    name: 'Client',
    component: ClientMain
  },
  {
    path: '*',
    name: '404',
    component: PageNotFound
  },
  {
    path: "/services/request",
    name: "Req",
    component: Req,
  },
  {
    path: "/profile",
    name: "profile",
    component: profile,
  },
  {
    path: "/profile2",
    name: "profile2",
    component: profile2,
  },
  {
    path: "/profile3",
    name: "profile3",
    component: profile3,
  },
  {
    path: "/profile4",
    name: "profile4",
    component: profile4,
  },
  {
    path: "/profile5",
    name: "profile5",
    component: profile5,
  },

  {
    path: "/activities",
    name: "activities",
    component: activities,
  },
  {
    path: "/Orders",
    name: "Orders",
    component: Orders,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
