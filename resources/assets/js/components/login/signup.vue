<template>
	<v-form @submit.prevent = "signup">
		<v-layout>
			<v-flex xs12 sm4 offset-sm4>
		    	<v-container>
			
				<v-card>
			        <v-img
			          src="./img/login.jpeg"
			          aspect-ratio="2.75"
			        ></v-img>
		    	

		    	<!-- input email -->
		    	<v-card-title>
		    	<h3 class = "flex text-center sm12">
		    		Create an Account!
		    	</h3>
				<v-flex
		          xs12
		          md12
		        >
		          <v-text-field
		            v-model="form.name"
		            label="Name"
		            :counter="10"
		            type = "text"
		            required
		          ></v-text-field>
		          
		          <span class = "red--text"
		          	v-if = "errors.name"
		           >{{ errors.name[0] }}</span>

		        </v-flex>

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
		        <span class = "red--text"
		          	v-if = "errors.email"
		           >{{ errors.email[0] }}</span>

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
		        <span class = "red--text"
		          	v-if = "errors.password"
		           >{{ errors.password[0] }}</span>

		        <v-flex
		          xs12
		          md12
		        >
		          <v-text-field
		            v-model="form.password_confirmation"
		            label="Confirm Password"
		            type = "password"
		            required
		          ></v-text-field>
		        </v-flex>
		    	</v-card-title>
		    	<!-- end form -->

		        <v-btn
		        	class = "justify-center white--text"
			    	color = "green"
			    	type = "submit"
			    >Sign Up
			    </v-btn>
				
				<router-link to = "/login">
					<v-btn class = "white--text"
					color = "blue">Login</v-btn>
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
				form : {
					name: null,
					email: null,
					password: null,
					password_confirmation: null,
				},
				errors: {}
			}
		},

		created() {
			if(User.loggedIn()) {
				this.$router.push({name:'forum'})
			}
		},

		methods: {
			signup() {
				axios.post('api/auth/signup', this.form)
				.then(res => {User.responseAfterLogin(res)
					this.$router.push({name:'forum'})
				})
				.catch(error => this.errors= error.response.data.errors)
			}
		}
	}
</script>

<style lang="scss" scoped="">
	
</style>