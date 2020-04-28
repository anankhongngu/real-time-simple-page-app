<template>
	<v-container>
		<v-form @submit.prevent="update">
			<v-layout>
				<v-flex xs12 sm6 offset-sm-3>
			    	
					<v-container>			   
				    <v-card class="mx-auto">
				        <!-- <v-img
				          src="./img/login.jpeg"
				          aspect-ratio="2.75"
				        ></v-img> -->
			    	
				    
			    	<!-- input category -->
				    	<v-card-title>
			          		<h3 class ="flex xs12 sm12 text-center">
					    		Edit question!
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

						<v-flex>
				          	<!-- <vue-simplemde v-model="form.body" type = "text" /> -->
				          	<markdown-editor v-model="form.body" type="text"></markdown-editor>
		          		</v-flex>
			    		</v-card-title>

						<v-card-actions>
							<v-btn 
					        	class = "justify-center white--text"
						    	color = "green"
						    	type = "submit"
						    >Edit
						    </v-btn>

						    <v-btn 
					        	class = "justify-center white--text"
						    	color = "orange"
						    	@click ="cancel"
						    >Cancel 
						    </v-btn>
						</v-card-actions>
					</v-card>
					</v-container>
				</v-flex>
			</v-layout>
		</v-form>
	</v-container>
</template>
<script>
	
	export default {
		props: ['data'],
		data() {
			return {
				form: {
					title: null,
					body: null
				}
			}
		},

		methods: {
			cancel() {
				EventBus.$emit('cancalEditing')
			},

			update() {
				axios.patch(`/api/question/${this.form.slug}`, this.form)
				.then( res => {
					this.cancel()
				})
				.catch(err=> console.log(err))
				
			}
		},

		created() {
			this.form = this.data
		}
		
	}

</script>