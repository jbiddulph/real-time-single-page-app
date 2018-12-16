<template>
    <v-container fluid grid-list-md>
        <v-layout row wrap>
            <v-flex xs8>
                <pub
                v-for="pub in pubs"
                :key="pub.id"
                :pub="pub"></pub>
                
            </v-flex>
            
            sidebar
        </v-layout>
    </v-container>
</template>

<script>
import pub from './pub'
export default {
    data(){
        return {
            pubs:{}
        }
    },
    components:{pub},
    created(){
        axios.get('/api/pub')
        .then(res => this.pubs = res.data.data)
        .catch(error => console.log(error.response.data))
    }
}
</script>

<style>

</style>
