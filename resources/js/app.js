
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { bootstrap } from 'bootstrap'
const asset = document.querySelector(`meta[name="asset"]`).content;

createInertiaApp({
  resolve: name => import(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    app.config.globalProperties.$route = route;
    app.config.globalProperties.$asset = asset;
    app.use(plugin).mount(el)
  },
})