<template>
    <div>
        <div class="card">                        
            <div class="card-body mx-auto">   
                <div>
                    <h5>{{question.text}}</h5><span> {{ player.score}} </span>
                </div>

                <div v-for="answer in question.answers">
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
    props: ['question','player'],
    methods: {        
        processAnswer(answer) {
            let aw = {...answer}
            aw.correct == 1 ? this.correctAndNextQuestion() : this.incorrectAndNextQuestion()
        },
        correctAndNextQuestion() {
            axios.put('/api/players/'+this.player.id, {
                score: this.player.score++                
            })
            .then(() => this.$emit('nextQuestion', this.question.id))
            .catch((error) => console.log(error))
            //increment score and save to db
            //emit next question event to game page
            console.log('correct')
        },
        incorrectAndNextQuestion(){
            console.log('incorrect')
        },
        
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