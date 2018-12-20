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
            </div>
        </v-card-title>

        <v-card-actions>
            <v-btn flat color="orange">Share</v-btn>
            <v-btn flat color="orange">Explore</v-btn>
        </v-card-actions>
    </v-card>
    
</template>

<script>
export default {
    
    props:['pub']
}
</script>
