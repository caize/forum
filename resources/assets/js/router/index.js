import Vue from 'vue'
import Router from 'vue-router'
import TopTopics from '../views/TopTopics'
import NewTopics from '../views/NewTopics'
import TopicView from '../views/TopicView'

Vue.use(Router)

export function createRouter () {
	return new Router({
		mode: 'history',
		fallback: false,
		routes: [
			{ path: '/:page(\\d+)?', component: TopTopics },
			{ path: '/new', component: NewTopics },
			{ path: '/t/:slug', component: TopicView },
		]
	})
}