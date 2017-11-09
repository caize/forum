<template>
	<div>
		<pagination></pagination>
		<div class="container">
			<div class="topic-list">
				<div class="topic" v-for="topic in topics" :key="topic.id">
					<router-link :to="'/t/' + topic.slug" class="title">{{ topic.title }}</router-link>
					<div class="meta">
						by <a href="#">user</a> {{ topic.created_at }} | <a href="#">0 comments</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import { mapGetters } from 'vuex'
	import Pagination from '../components/Pagination'

	export default {
		name: 'top-topics',

		components: { Pagination },

		computed: mapGetters({
			topics: 'topics',
		}),

		mounted () {
			this.$store.dispatch('fetchTopTopics')
		}
	}
</script>