<template>
    <v-container fluid grid-list-md>
        <v-layout row wrap>
            <v-flex xs8>
                <question
                v-for="question in questions"
                :key="question.path"
                :question="question"></question>
                <create></create>
            </v-flex>
            <v-flex xs4>
                <app-sidebar></app-sidebar>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import AppSidebar from './AppSidebar'
import create from './create'
import question from './question'
export default {
    components:{question,create,AppSidebar},
    data() {
        return {
            questions:{}
        }
    },
    created(){
        axios.get(`/api/pub/${this.$route.params.id}/question`)
        .then(res => this.questions = res.data.data)
        .catch(error => console.log(error.response.data))
    }
}
</script>

<style>

</style>
