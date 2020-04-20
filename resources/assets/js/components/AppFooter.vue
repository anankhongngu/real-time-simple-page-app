<template>
  <v-footer
    darken
    height="auto"
  >
  
    <v-card
      class="flex"
      flat
      tile
    >


		<v-card-actions class="blue-grey darken-4 justify-center">
            
		<!-- <strong class ="white--text">Never Give Up</strong> -->
		<v-btn
            v-for="icon in icons"
            :key="icon"
            class="mx-4 white--text"
            icon >
            <v-icon size="24px">{{ icon }}</v-icon>
          </v-btn>

        </v-card-actions>
    </v-card>
  </v-footer>
</template>

<script>
	export default {
        data: () => ({
        icons: [
            'fab fa-facebook',
            'fab fa-twitter',
            'fab fa-instagram',            
        ],
    })
  }
</script>

<style> 

</style>

