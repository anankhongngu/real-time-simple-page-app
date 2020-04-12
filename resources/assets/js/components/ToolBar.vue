<template>
	<v-card color=""  fixed flat height="auto" tile>
		<v-toolbar dense class= "teal">
		
			<!-- <v-toolbar-side-icon class = "white--text"></v-toolbar-side-icon> -->
			<v-toolbar-title class = "white--text">Title</v-toolbar-title>

			<v-spacer></v-spacer>
			
			<div class ="hidden-sm-and-down">

				<router-link to = "/forum">
					<v-btn round class = "white--text"
					color= "yellow darken-3">Forum</v-btn>
				</router-link>	
				
				<v-btn round class = "white--text"
				color = "yellow darken-3">Ask Question</v-btn>
				
				<v-btn round class = "white--text"
				color = "yellow darken-3">Category</v-btn>

				<router-link to = "login">
					<v-btn round class = "white--text"
					color = "yellow darken-3">Login</v-btn>
				</router-link>

			</div>

			<v-btn icon>
		      <v-icon color = "yellow darken-3">search</v-icon>
		    </v-btn>

			
		</v-toolbar>
	</v-card>
</template>

<script>

</script>

<style lang = "scss" scoped>
	
</style>