import axios from 'axios'
import * as types from '../mutation-types'

export default {
	state: {
		topics: {}
	},

	mutations: {
		[types.FETCH_TOP_TOPICS_SUCCESS] (state, { topics }) {
			state.topics = topics
		}
	},

	actions: {
		fetchTopTopics ({ commit }) {
			axios.get('/api/topics/top')
				.then(response => {
					commit(types.FETCH_TOP_TOPICS_SUCCESS, { topics: response.data })
				})
				.catch(e => {
					console.error(e)
				})
		}
	},

	getters: {
		topics: state => state.topics
	}
}