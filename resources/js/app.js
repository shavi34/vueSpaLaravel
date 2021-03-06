
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/Home.vue';
import App from './components/App.vue'
import About from './components/About.vue';
import SiteStats from './components/SiteStats.vue'

let Animation = () =>  import('./components/Animation.vue');

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/animation', component: Animation },
  {path: '/sitestats', component: SiteStats}
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.

const router = createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: createWebHistory(),
  routes, // short for `routes: routes`
})


const app = createApp(App);
app.use(routes);
app.use(router);
app.mount('#app');