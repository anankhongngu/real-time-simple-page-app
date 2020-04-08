<template>
	<v-card color="grey lighten-4" flat height="200px" tile>
		<v-toolbar dense>
			<!-- <v-app-bar-nav-icon></v-app-bar-nav-icon>	 -->

			<v-toolbar-title>Title</v-toolbar-title>

			<v-spacer></v-spacer>
			
			<v-toolbar-items class="hidden-sm-and-down">
				<v-btn class ="bg-white">Forum</v-btn>
				<v-btn class ="bg-white">Ask Question</v-btn>
				<v-btn class ="bg-white">Category</v-btn>
				<v-btn class ="bg-white">Login</v-btn>
			</v-toolbar-items>


			<v-btn icon>
			<v-icon>mdi-magnify</v-icon>
			</v-btn>

			
		</v-toolbar>
	</v-card>
</template>

<script>

</script>

<style lang = "scss" scoped>
	.bg-white {
		background-color: #fff;
		box-shadow: unset;
	}
</style>