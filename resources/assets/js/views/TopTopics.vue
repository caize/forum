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
	import Pagination from '../components/Pagination'
	import axios from 'axios'
	export default {
		name: 'top-topics',

		components: { Pagination },

		data () {
			return {
				topics: ''
			}
		},

		mounted () {
			this.fetchTopics()
		},

		methods: {
			fetchTopics () {
				axios.get('/api/topics/top')
					.then(response => {
						this.topics = response.data
					})
					.catch(e => {
						console.error(e)
					})
			}
		}
	}
</script>