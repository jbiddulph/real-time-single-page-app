<template>
    <v-card>
        <v-container fluid>
            <v-card-title>
                <div>
                    <h1 class="headline">
                        {{data.pubname}}
                    </h1>
                    <div class="grey--text">
                        {{data.address}}
                        <span v-if="data.address2">{{data.address2}}</span><br />
                        {{data.town}}<br />
                        {{data.county}}<br />
                        {{data.postcode}}<br />
                        {{data.telephone}}<br />
                        {{data.website}}<br />
                    </div>
                </div>
                <v-spacer></v-spacer>
                <v-btn color="green">
                    <router-link v-bind:to="`/pub/${ data.id }/forum`">
                        Forum
                    </router-link>
                </v-btn>
            </v-card-title>
        </v-container>
    </v-card>
</template>

<script>
export default {
    props:['data']
}
</script>

<style>

</style>
