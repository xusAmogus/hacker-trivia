<template>
    <Question v-if="questionData && playerData" :player="this.playerData" :question="this.questionData" v-show="isVisible()"></Question>
</template>

<script>
import Question from '../components/Question.vue'
export default {
    name:'Game',
    components: { Question },    
    data() {
       return {
           questionData: this.getQuestion(),           
           playerData: this.getPlayer()           
       }
   },
    methods: {
        isVisible() {
           return this.$store.state.isVisible
       },
       getQuestion() {
           axios.get('/api/question/1').then((response) => {               
               this.questionData = response.data.question
            }).catch((error) => console.log(error))
       },       
       getPlayer() {
           axios.get('/api/player/1').then((response) => {               
               this.playerData = response.data.player[0]
           }).catch((error) => console.log(error))
       }
    }
}
</script>