<template>
	<v-container grid-list-md >
		<v-card class = "blue-grey darken-4 white--text">
	        <v-card-title primary-title>
	          <div>
	            <h3 class="headline mb-0">
	            	{{data.title}}
	        	</h3>	
	            <span class ="grey--text"> 
	            	{{ data.user }} said {{ data.created_at }} 
	        	</span>
	          </div>
	          <v-spacer></v-spacer>
	          <v-btn class = "blue lighten-1 white--text">5 replies</v-btn>


	        </v-card-title>

	        <v-card-text
	        	v-html="body"
	        ></v-card-text>

			<v-card-actions v-if ="own">
				<v-btn icon class ="blue--text">
					<v-icon @click ="edit">edit</v-icon>
				</v-btn>


				<v-btn icon class ="red--text" @click ="destroy()">
					<v-icon>delete</v-icon>
				</v-btn>
				
			</v-card-actions>

	    </v-card>
	</v-container>

</template>
<script>
	export default {
		props: ['data'],

		data() {
			return {
				own: User.own(this.data.user_id)
			}
		},

		computed: {
			body() {
				return md.parse(this.data.body)
			}
		},

		methods: {
			destroy() {
				axios.delete(`/api/question/${this.data.slug}`)
				.then(res => this.$router.push('/forum'))
				.catch(error => console.log(error.response.data))
			},

			edit() {
				EventBus.$emit('startEditing')
			}
		}
	}
</script>
