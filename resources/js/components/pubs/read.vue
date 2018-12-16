<template>
    <div v-if="question">
        <edit-question
         v-if="editing"
         :data = question>

        </edit-question>
        
        <show-question v-else
        :data = question
        ></show-question>
        
    </div>
</template>

<script>
import EditQuestion from './EditQuestion'
import ShowQuestion from './ShowQuestion'
export default {
    components:{EditQuestion,ShowQuestion},
    data() {
        return {
            question:null,
            editing:false
        }
    },
    created() {
        this.listen()
        this.getQuestion()
    },
    methods: {
        listen(){
            EventBus.$on('StartEditing',()=>{
                this.editing = true
            })

            EventBus.$on('CancelEditing',()=>{
                this.editing = false
            })
            
        },
        getQuestion() {
            axios.get(`/api/pub/${this.$route.params.id}/question/${this.$route.params.slug}`)
            .then(res => this.question = res.data.data)
            .catch(error => console.log(error.response.data))
        }

    }
}
</script>

<style>

</style>
