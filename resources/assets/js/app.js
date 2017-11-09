import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './components/App'
import TopTopics from './components/TopTopics'
import NewTopics from './components/NewTopics'

Vue.use(VueRouter)

const routes = [
	{
		path: '/',
		component: TopTopics
	},
	{
		path: '/new',
		component: NewTopics
	}
]

const router = new VueRouter({
	routes,
	mode: 'history'
})

new Vue({
    el: '#app',
	template: '<App />',
	components: {App},
	router
}).$mount('#app');
