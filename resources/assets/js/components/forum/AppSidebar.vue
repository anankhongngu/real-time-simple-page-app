<template>

	<v-card class ="mt-2 blue-grey darken-4 white--text">
        <v-toolbar class="blue-grey dense darken-4" dark>
			<v-toolbar-side-icon></v-toolbar-side-icon>

			<v-toolbar-title>Categories</v-toolbar-title>

			<v-spacer></v-spacer>

			<v-btn icon>
			<v-icon>search</v-icon>
			</v-btn>
		</v-toolbar>	
		
		<v-list >
			<v-list-tile v-for ="category in categories" :key="category.id">
				<v-list-tile-content>
					<v-list-tile-title>{{ category.name }}</v-list-tile-title>
				</v-list-tile-content>
			</v-list-tile>
		</v-list>
			

        
	</v-card>

</template>

<script>
	
	export default{
		data() {
			return {
				categories: {}
			}
		},
		created() {
			axios.get('/api/category')
			.then(res => this.categories = res.data.data)
		}
	}

</script>