<template>
    <div>
		<navbar></navbar>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<router-view></router-view>
			</div>
		</div>
	</div>
</template>

<script>
    import Navbar from './components/Navbar'
    export default {
        name: 'app',
        components: {Navbar}
    }
</script>

<style lang="scss">
	$body-bg-color: #f2f3f5;
	$text-color: #34495e;
	$meta-text-color: #828282;
	$topic-list-bg-color: #ffffff;
	$topic-list-border-color: #eeeeee;
	$meta-href-hover-color: #fd6320;

	@import url('https://fonts.googleapis.com/css?family=Yantramanav');

	* {
		margin: 0;
		padding: 0;
	}

	body {
		font-family: 'Yantramanav', sans-serif;
		font-size: 16px;
		background-color: $body-bg-color;
	}

	body, a {
		color: $text-color;
	}

	a {
		transition: color .25s ease;
	}

	.container {
		width: 100%;
		max-width: 800px;
		margin: 0 auto;
	}

	.topic-list {
		margin: 30px 0;
		background-color: $topic-list-bg-color;

		.topic {
			width: 100%;
			padding: 20px 30px;
			border-bottom: 1px solid $topic-list-border-color;

			.title {
				text-decoration: none;
			}

			.meta {
				line-height: 1;
				margin-top: .5em;
				font-size: .85em;
				color: $meta-text-color;

				a {
					color: $meta-text-color;

					&:hover, &:focus {
						color: $meta-href-hover-color;
					}
				}
			}
		}
	}
</style>
