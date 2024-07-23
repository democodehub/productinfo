import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, router } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

// added By Bassam To prevent navigation back after logout

router.on('success', (event) => {
    let isAuthenticated = event.detail.page.props.auth.user !== null;
    window.localStorage.setItem('isAuthenticated', isAuthenticated);
});

window.addEventListener('popstate', (event) => {
    if(window.localStorage.getItem('isAuthenticated') === 'false') {
        event.stopImmediatePropagation();
        router.get('/login');
    }
});
// end of after logout

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
