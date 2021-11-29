<template>
    <div>
        <div class="card">                        
            <div class="card-body mx-auto">   
                <div>
                    <h5>{{question}}</h5><span> {{ player.score}} </span>
                </div>

                <div v-for="answer in answers">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input v-on:click="processAnswer(answer)"  :id="answer.id" name="option" type="radio" class="form-check-input">{{answer.text}}
                        </label>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Question',
    components: '',
    data() {
        return {
            question: 'Name 4 frameworks',        
            answers: {
                // axios call to Questioncontroller
                answerA: {text:'Laravel, Django, VueJs, Magento',id:1},
                answerB: {text:'NPM, WebPack, NodeJs, PHP',id:2},
                answerC: {text:'Python, PHP, Javascript, CSS',id:3},
                answerD: {text:'Nmap, SqlMAP, GOBUSTER, KALI',id:4}
            },
            correctAnswer: 1,
            player: { id:0, score: 0}
        }
    },
    methods: {        
        processAnswer(answer) {
            answer.id === this.correctAnswer ? this.correctAndNextQuestion() : this.incorrectAndNextQuestion()
        },
        correctAndNextQuestion() {
            this.player.score++
            axios.get('next').then(response => (
                    this.question = response.data.question.text,
                    this.answers = response.data.answers
                    )).catch(error => console.log(error))
        },
        incorrectAndNextQuestion(){
            console.log('incorrect')
        }
    }
}
</script>

<style scoped>
    .card {
        background:cornflowerblue;
    }
    .card-body {
        background: transparent;
    }
</style>