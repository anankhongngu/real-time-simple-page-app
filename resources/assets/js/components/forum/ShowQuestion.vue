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
	        	v-html="data.body"
	        >	        	
	        </v-card-text>
	    </v-card>
	</v-container>

</template>
<script>
	export default {
		props: ['data']
	}
</script>
