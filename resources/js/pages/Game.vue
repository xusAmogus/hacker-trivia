<template>
    <Question v-on:nextQuestion="nextQuestion($event)" v-if="questionData && playerData" :player="this.playerData" :question="this.questionData" v-show="isVisible()"></Question>
</template>

<script>
import Question from '../components/Question.vue'
export default {
    name:'Game',
    components: { Question },    
    data() {
       return {
           questionData: this.getQuestion(),           
           playerData: this.getPlayer(),
           currentQuestion: ''    
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
       nextQuestion(id) {
            this.currentQuestion = id
            this.currentQuestion++
            axios.get('/api/question/'+this.currentQuestion).then((response) => { 
                this.questionData = response.data.question
            }).catch((error) => console.log(error))
       },
            
       getPlayer() {
           axios.get('/api/players/1').then((response) => {               
               this.playerData = response.data.player[0]
           }).catch((error) => console.log(error))
       }
    }
}
</script>