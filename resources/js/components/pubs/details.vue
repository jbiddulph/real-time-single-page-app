<template>
    <show-pub
    :data = pub></show-pub>
</template>

<script>
import ShowPub from './ShowPub'
export default {
    components:{ShowPub},
    data() {
        return {
            pub:{}
        }
    },
    created(){
        axios.get(`/api/pub/${this.$route.params.id}`)
        .then(res => this.pub = res.data.data)
        .catch()
    }
}
</script>

<style>

</style>
