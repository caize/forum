import Vue from 'vue'
import Vuex from 'vuex'
import topics from './modules/topics'

Vue.use(Vuex)

export function createStore () {
	return new Vuex.Store({
		modules: {
			topics
		},
		strict: true
	})
}