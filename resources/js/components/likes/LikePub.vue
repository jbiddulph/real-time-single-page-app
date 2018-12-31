<template>
    <div>
        <v-btn icon @click="likePub">
            <v-icon :color="color">
                favorite
            </v-icon> {{count}}
        </v-btn>
    </div>
</template>

<script>
export default {
    props:['content'],
    data() {
        return {
            publiked:this.content.liked,
            count:this.content.publike_count
        }
    },
    computed: {
        color() {
            return this.publiked ? 'red' : 'red lighten-4'
        }
    },
    methods:{
        likePub() {
            if(User.loggedIn()){
                this.publiked ? this.decr(): this.incr()
                this.publiked = !this.publiked
            }
        },
        incr(){
            axios.post(`/api/pub/like/${this.content.id}`)
            .then(res => this.count ++)
        },
        decr() {
            axios.delete(`/api/pub/like/${this.content.id}`)
            .then(res => this.count --)
        }
    }
}
</script>

<style>

</style>
