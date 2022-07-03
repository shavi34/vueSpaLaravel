
import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/inertia-vue3'
import NProgress from 'nprogress'
import { Inertia } from '@inertiajs/inertia'
import Layout from './Shared/Layout.vue'

NProgress.start();
NProgress.done();
let timeout = null
Inertia.on('start', () => {
 
  timeout = setTimeout(NProgress.start(),1250)
})

Inertia.on('progress', (event) => {
  if (NProgress.isStarted() && event.detail.progress.percentage) {
    NProgress.set((event.detail.progress.percentage / 100) * 0.9)
  }
})

Inertia.on('finish', (event) => {
  clearTimeout(timeout)
  if (!NProgress.isStarted()) {
    return
  } else if (event.detail.visit.completed) {
    NProgress.done()
  } else if (event.detail.visit.interrupted) {
    NProgress.set(0)
  } else if (event.detail.visit.cancelled) {
    NProgress.done()
    NProgress.remove()
  }
})

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  title: title => title ? `${title} - Ping CRM` : 'Ping CRM',
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})