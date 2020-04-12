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
		    	</v-card>

		    	<!-- input email -->
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


		        <v-btn
		        	class = "justify-center white--text"
			    	color = "green"
			    	type = "submit"
			    >Login
			    </v-btn>

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

		methods: {
			login() {
				axios.post('api/auth/login', this.form)
				.then(response => console.log(response.data))
				.catch(error => console.log(error.response.data))
			}
		}
	}

</script>

<style>

</style>