<template>
	<div class="container">
		<div class="topic-view" v-if="topic">
			<h1>{{ topic.title }}</h1>
			<div class="meta">
				0 points | by <a href="#">user</a> {{ topic.created_at }}
			</div>
			<div class="body">
				{{ topic.body }}
			</div>
		</div>
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

<style lang="scss" scoped>
	$topic-view-bg-color: #ffffff;
	$meta-color: #828282;
	$href-hover-color: #fd6320;
	$body-border-color: #eeeeee;

	.topic-view {
		margin-bottom: 1.5em;
		padding: 2em 1.5em;
		background-color: $topic-view-bg-color;
	}

	h1 {
		font-size: 1.5em;
		font-weight: 600;
	}

	.body {
		margin-top: 1em;
		padding-top: 1em;
		border-top: 1px solid $body-border-color;
	}

	.meta {
		margin-top: .5em;
		font-size: 1em;
		color: $meta-color;

		a {
			color: $meta-color;

			&:hover, &:focus {
				color: $href-hover-color;
			}
		}
	}
</style>