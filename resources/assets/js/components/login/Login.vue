<template>
	<v-form @submit.prevent = "login()">
		<v-layout>
			<v-flex xs12 sm6 offset-sm3>
		    	
				<v-container>			   
			    <v-card>
			        <v-img
			          src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
			          aspect-ratio="2.75"
			        ></v-img>
		    	
			    
		    	<!-- input email -->
		    	<v-card-title>
          		
				<v-flex
		          xs12
		          md12
		        >
		          <v-text-field
		            v-model="form.email"
		            label="Email"
		            type = "email"
		            required
		          ></v-text-field>
		        </v-flex>
		    	



		        <v-flex
		          xs12
		          md12
		        >
		          <v-text-field
		            v-model="form.password"
		            label="Password"
		            type = "password"
		            required
		          ></v-text-field>
		        </v-flex>

		    	</v-card-title>


		    	
		        <v-btn
		        	class = "justify-center white--text"
			    	color = "green"
			    	type = "submit"
			    >Login
			    </v-btn>

			    <router-link to = "/signup">
					<v-btn class = "white--text"
					color = "blue">Sign Up</v-btn>
				</router-link>

				
		       	
		    	</v-card>   	
	       		</v-container>
			</v-flex>
		</v-layout>
  	</v-form>
</template>

<script>
	
	export default {
		data() {
			return {
				form: {
					email: null,
					password: null,
				}
			}
		},


		created() {
			if(User.loggedIn()) {
				this.$router.push({name:'forum'})
				//chuyen den forum sau khi dang nhap
			}
		},
		methods: {
			login() {
				User.login(this.form) //window.User = User file app.js
			}
		}
	}

</script>

<style>

</style>