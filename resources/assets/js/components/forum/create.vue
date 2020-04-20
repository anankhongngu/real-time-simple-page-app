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
			    		Create catelogy!
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
		            multiple
		            item-text="name"
		            item-value="id"
		          	></v-select>
		          	<v-flex>
		          	<vue-simplemde v-model="form.body" />
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
				categories: {},
				errors: {}
			}
		},

		created() {
			axios.get('/api/category')
			.then(response => this.categories = response.data.data)
		},

		methods: {
			create() {
				axios.post('/api/question', this.form)
				.then(response => console.log(response.data))
				.catch(error => this.errors = error.response.data.error)
			}
		}
	}

</script>
<style>
	
</style>