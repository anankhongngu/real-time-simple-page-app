<template>
	<v-container>
		<v-form @submit.prevent = "create()">
			<v-layout>
				<v-flex xs12 sm6 offset-sm-3>
			    	
					<v-container>			   
				    <v-card class="mx-auto">
				        <v-img
				          src="./img/login.jpeg"
				          aspect-ratio="2.75"
				        ></v-img>
			    	
				    
			    	<!-- input category -->
			    	<v-card-title>
	          		<h3 class ="flex xs12 sm12 text-center">
			    		Create question!
			    	</h3>
					<v-flex
			          xs12
			          md12
			        >
			          <v-text-field
			            v-model="form.title"
			            label="Title"
			            type = "text"
			            required
			          ></v-text-field>
			        </v-flex>   

			        <v-select
		            v-model="form.category_id"
		            :items="categories"
		            attach
		            chips
		            label="Category"
		            item-text="name"
		            item-value="id"
		          	></v-select>
		          	
		          	<v-flex>
		          	<!-- <vue-simplemde v-model="form.body" type = "text" /> -->
		          	<markdown-editor v-model="form.body" type="text"></markdown-editor>
		          	</v-flex>
		          		
		          	<!-- </markdown-editor> -->
			       

			       </v-card-title>

					
			        <v-btn
			        	class = "justify-center white--text"
				    	color = "green"
				    	type = "submit"
				    >Create
				    </v-btn>

					
			    	</v-card>   	
		       		</v-container>
				</v-flex>
			</v-layout>
  		</v-form>
  	</v-container>

</template>

<script>
	
	export default {
		data() {
			return {
				form: {
					title: null,
					category_id: null,
					body: null,
				},
				categories: [],
				errors: {}
			} 
		},

		created() {
			axios.get('/api/category')
			.then(res => {
				this.categories = res.data.data //lay phan tu trong data.data xong them vo thang form categories
			})
		},

		methods: {
			create() {
				axios.post('/api/question', this.form)
				.then(response => this.$router.push(response.data.path))
				.catch(error => this.errors = error.response.data.error)
			}
		}
	}

</script>
<style>

</style>