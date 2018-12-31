<template>
    <v-card class="mt-2">
        <v-card-title primary-title>
            <div>
                
                <h3 class="headline mb-0">
                    <router-link v-bind:to="`pub/${ pub.id }`">
                        {{pub.pubname}}
                    </router-link>
                </h3>
                
            <div>{{pub.address}}</div>
            <v-seperator></v-seperator>
            <like-pub :content="pub"></like-pub>
            </div>
        </v-card-title>

        <v-card-actions>
            <v-btn flat color="orange">Share</v-btn>
            <v-btn flat color="orange">Explore</v-btn>
        </v-card-actions>
    </v-card>
    
</template>

<script>
import LikePub from '../likes/LikePub'

export default {
    props:['data'],
    components:{
        LikePub
    },
    props:['pub']
}
</script>
