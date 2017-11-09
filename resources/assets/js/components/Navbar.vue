<template>
	<header>
		<div class="container">
			<nav>
				<router-link :to="'/'">Yvue</router-link>
				<router-link :to="'/'">Top</router-link>
				<router-link :to="'/new'">New</router-link>
				<router-link :to="'/ask'">Ask</router-link>
			</nav>
		</div>
	</header>
</template>

<script>
	export default {
		name: 'navbar',
	}
</script>

<style lang="scss" scoped>
	$header-bg-color: #fd6320;
	$nav-href-color: hsla(0,0%,100%,.8);
	$nav-href-hover-color: #ffffff;

	header {
		display: flex;
		width: 100%;
		height: 55px;
		background-color: $header-bg-color;
		align-items: center;
	}

	nav {
		a {
			margin-right: 30px;
			color: $nav-href-color;
			text-decoration: none;

			&:hover, &:focus {
				color: $nav-href-hover-color;
			}
		}
	}
</style>