<template>

	<v-form @submit.prevent = "createCategory">
		<v-container grid-list-md >
			<v-layout>

				<v-flex xs12 md5>
				    <v-card class="mx-auto mt-2">
				        <v-img
				          src="./img/login.jpeg"
				          aspect-ratio="2.75"
				        ></v-img>
			    	
				    
			    	<!-- input email -->
			    	<v-card-title>
		          		<h3 class ="flex sm12 text-center">
				    		Create Category!
				    	</h3>
						<v-flex
				          xs12
				          md12
				        >
				          <v-text-field
				            v-model="form.name"
				            label="Category name"
				            required
				          ></v-text-field>
				        </v-flex>
				    </v-card-title>


					<v-btn
			        	class = "justify-center white--text"
				    	color = "blue"
				    	type = "submit"
				    	v-if="editSlug"
				    >Edit
				    </v-btn>

				    <v-btn
			        	class = "justify-center white--text"
				    	color = "green"
				    	type = "submit"
				    	v-else
				    >Create
				    </v-btn>

					</v-card>
				</v-flex>

				<v-flex xs12 md7>
					<v-card class ="mt-2 blue-grey darken-4x">
				        <v-toolbar class="blue-grey dense darken-4" dark>
							<v-toolbar-side-icon></v-toolbar-side-icon>

							<v-toolbar-title>Categories</v-toolbar-title>

							<v-spacer></v-spacer>

							<v-btn icon>
							<v-icon>search</v-icon>
							</v-btn>
						</v-toolbar>	
						
						<v-list v-for ="(category, index) in categories" 
								:key="category.id">
							<div >
							<v-list-tile>
								<v-list-tile-content>
									<v-list-tile-title>{{ category.name }}</v-list-tile-title>
								</v-list-tile-content>
								
								<v-btn icon @click="edit(index)"><v-icon class="blue--text dark">edit</v-icon></v-btn>
								
								<v-btn icon @click="destroy(category.slug, index)"><v-icon class="red--text dark">delete</v-icon></v-btn>

							</v-list-tile>
							</div>
						</v-list>
					</v-card>
				</v-flex>

			</v-layout>	
		</v-container>	
	</v-form>

</template>


<script>
	
	export default {
		data() {
			return {
				form: {
					name: null,
				},
				categories: [],
				editSlug: null,
			}
		},

		created() {
			this.getListCategory()
		},

		methods: {

			getListCategory(){
				axios.get('/api/category')
					.then(res => {
					this.categories = res.data.data})
			},

			createCategory() {
				this.editSlug ? this.update() : this.createCate()

			},

			update() {
				axios.patch(`/api/category/${this.editSlug}`, this.form)
				.then( res => {
					this.categories.unshift(res.data)
					this.form.name = null
					this.editSlug = false
				})
			},

			createCate() {

				if ( !User.admin()){
					this.$router.push('forum');
				}
				axios.post('/api/category', this.form)
				.then( res => {
					this.categories.unshift(res.data)
					// this.getListCategory()
					this.form.name = null
				})
			},

			destroy(slug, index) {
				axios.delete(`/api/category/${slug}`)//goi qua slug ben category.php de xoa cho slug
				.then(res => {
					this.categories.splice(index, 1)})
				// this.getListCategory()
			},

			edit(index) {
				this.form.name = this.categories[index].name
				this.editSlug = this.categories[index].slug
				this.categories.splice(index, 1)
			}
		}
	}

</script>

<style lang="scss" scoped></style>