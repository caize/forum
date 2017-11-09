<template>
	<div>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								data-target="#app-navbar-collapse" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<router-link :to="'/'" class="navbar-brand">Yvue</router-link>
					</div>
					<div class="collapse navbar-collapse" id="app-navbar-collapse">
						<ul class="nav navbar-nav navbar-left">
							<li>
								<router-link :to="'/'">Top</router-link>
							</li>
							<li>
								<router-link :to="'/new'">New</router-link>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</template>

<script>
	export default {
		name: 'navbar'
	}
</script>