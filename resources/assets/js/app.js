import Vue from 'vue'
import App from './App.vue'
import { createStore } from "./store";
import { createRouter } from "./router";

const router = createRouter()
const store = createStore()

new Vue({
	el: '#app',
	router,
	store,
	render: h => h(App)
})
