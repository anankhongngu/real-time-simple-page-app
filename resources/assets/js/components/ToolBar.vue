<template>
	<v-card color=""  fixed flat height="auto" tile>
		<v-toolbar dense class= "teal">
		
			<!-- <v-toolbar-side-icon class = "white--text"></v-toolbar-side-icon> -->
			<v-toolbar-title class = "white--text">Welcome</v-toolbar-title>

			<v-spacer></v-spacer>
			
			<div class ="hidden-sm-and-down">

				<router-link 
				
				v-for = "item in items"
				:key = "item.title"
				:to = "item.to"
				v-if = "item.show"
				>
					<v-btn round class = "white--text"
					color = "yellow darken-3">{{ item.title }}</v-btn>
				</router-link>

			</div>

			<v-btn icon>
		      <v-icon color = "yellow darken-3">search</v-icon>
		    </v-btn>

			
		</v-toolbar>
	</v-card>
</template>

<script>
	export default {
		data() {
			return {
				items: [
					{
						title: 'Forum', 
						to: '/forum',
						show: true
					},

					{
						title: 'Ask Question', 
						to: '/ask',
						show: User.loggedIn()
					},

					{
						title: 'Category', 
						to: '/category',
						show: User.loggedIn()
					},

					{
						title: 'Logout', 
						to: '/logout',
						show: User.loggedIn()
					},

					{
						title: 'Login', 
						to: '/login',
						show: !User.loggedIn()
					},

				]
			}
		},

		created() {
			EventBus.$on('logout', () => {
				User.logout()
			})
		}
	}
</script>

<style lang = "scss" scoped>
	
</style>