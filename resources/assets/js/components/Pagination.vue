<template>
	<div class="pagination">
		<span>&lt; prev</span>1/2<a href="#">next &gt;</a>
	</div>
</template>

<script>
	export default {
		name: 'pagination'
	}
</script>

<style lang="scss" scoped>
	$bg-color: #ffffff;
	$span-color: #cccccc;

	.pagination {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 100%;
		height: 48px;
		background-color: $bg-color;
		box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
	}

	a {
		text-decoration: none;
	}

	a, span {
		margin: 0 1em;
	}

	span {
		color: $span-color;
	}
</style>