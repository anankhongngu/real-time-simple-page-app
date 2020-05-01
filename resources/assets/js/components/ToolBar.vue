<template>
	

<v-card color=""  fixed flat height="auto" tile>
		<v-toolbar dense class= "blue-grey darken-4">
		
			<!-- <v-toolbar-side-icon class = "white--text"></v-toolbar-side-icon> -->
			<router-link to="/forum">
			<v-toolbar-title 
			class = "white--text">
			<strong class="blue--text"
			style="font-size: 25px">Fun</strong>Boo

			</v-toolbar-title>
		</router-link>
			<v-spacer></v-spacer>
			
			<div class ="hidden-sm-and-down bg-btn">
				
				<router-link 
				
				v-for = "item in items"
				:key = "item.title"
				:to = "item.to"
				v-if = "item.show"
				
				 >
				<v-btn class = "blue-grey darken-4 

				white--text" 
				style="border: unset; box-shadow: unset">			
					{{ item.title }}

				</v-btn>

				</router-link>
				
			</div>

			<v-btn icon>
		      <v-icon class = "white--text">search</v-icon>
		    </v-btn>

		    <v-btn icon>
		       <v-icon class="white--text">edit</v-icon>

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
						show: User.admin()
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
		dialog: false,
		created() {
			EventBus.$on('logout', () => {
				User.logout()
			})
		}
	}
</script>

<style lang = "scss" scoped>
	
</style>