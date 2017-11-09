<template>
	<div>
		<div class="panel" v-for="topic in topics" :key="topic.id">
			<div class="panel-body">
				<router-link :to="'/t/' + topic.slug">{{ topic.title }}</router-link>
			</div>
		</div>
	</div>
</template>

<script>
	import axios from 'axios'
	export default {
		name: 'new-topics',

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
				axios.get('/api/topics/new')
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