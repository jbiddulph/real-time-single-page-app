<template>
    <div>
        <reply 
    v-for="(reply,index) in content"
    :key="reply.id"
    :v-if="replies"
    :data="reply"
    :index=index></reply>
    </div>
</template>

<script>
import Reply from './reply'
export default {
    props:['question'],
    data() {
        return {
            content:this.question.replies
        }
    },
    components: {Reply},
    created() {
        this.listen()
    },
    methods:{
        listen(){
            EventBus.$on('newReply',(reply) => {
                this.content.unshift(reply)
            })
            EventBus.$on('deleteReply',(index) => {
                axios.delete(`/api/pub/${this.$route.params.id}/question/${this.$route.params.slug}/reply/${this.content[index].id}`)
                .then(res => {
                    this.content.splice(index,1)
                })
            })
        }
    }
}
</script>

<style>

</style>
