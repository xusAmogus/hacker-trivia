require('./bootstrap');
//https://github.com/laineus/vue3-smooth-scroll/issues/1
import { createApp } from 'vue'
import  { store } from './store/index.js'
import { router } from './router/index.js'
import App from './components/App.vue'

let app = createApp(App)
app.use(router)
app.use(store)

app.mount("#app")
