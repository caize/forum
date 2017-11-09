<template>
	<div v-if="topic">
		<h3>{{ topic.title }}</h3>
	</div>
</template>

<script>
	import axios from 'axios'
	export default {
		name: 'topic-view',

		data () {
			return {
				topic: ''
			}
		},

		mounted () {
			this.fetchTopic()
		},

		methods: {
			fetchTopic () {
				axios.get('/api/topics/topic/' + this.$route.params.slug)
					.then(response => {
						this.topic = response.data
					})
					.catch(e => {
						console.error(e)
					})
			}
		}
	}
</script>