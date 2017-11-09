<template>
    <div>
		<navbar></navbar>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<router-view></router-view>
				</div>
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
