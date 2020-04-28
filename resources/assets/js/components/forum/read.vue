<template>
	<div v-if = "question">
		<edit-question 
		:data = question
		v-if="editing"></edit-question>
		
	
		<show-question
		v-else
		:data = question></show-question>
		
	</div>
</template>

<script>
import ShowQuestion from './ShowQuestion'
import EditQuestion from './editQuestion'
	export default {
		components: {ShowQuestion, EditQuestion},
		data() {
			return {
				question: null,
				editing: false
			}
		},
		created() {
			this.listen()
			this.getQuestion()
		},

		methods: {
			listen() {
				EventBus.$on('startEditing', () => {
					this.editing = true
				})

				EventBus.$on('cancalEditing', () => {
					this.editing = false
				})
			},

			getQuestion() {
				axios.get(`/api/question/${this.$route.params.slug}`)
				.then(response => this.question = response.data.data)
			}
		}

	}
</script>