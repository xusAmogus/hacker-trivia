<template>
    <form @submit="processForm" action="#" method="post">
        <div class="form-group">
            <label for="text">Question:</label>
            <input v-model="formItems.question" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter question">
            
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerA.text" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
            
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerB.text" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
 
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerC.text" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
        
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerD.text" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
        </div>
        <div class="form-group">
            <div class="dropdown">
                
                <select v-model="selectedOption">
                    <option disabled value="">Please select one</option>
                    <option v-for="answer in formItems.answers" v-bind:key="answer.id" v-bind:value="answer.id">{{answer.id}}</option>
                </select>
            </div> 
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>
<script>
export default {
    name:'Form',    
    data(){
        return {
            formItems: {
                question: '',
                answers: {
                    answerA: { id:1, text: '', correct: false },
                    answerB: { id:2, text: '', correct: false },
                    answerC: { id:3, text: '', correct: false },
                    answerD: { id:4, text: '', correct: false }
                }
            },
            selectedOption: undefined
        }                            
    },
    methods: {
        processForm: function (e) {
            e.preventDefault()
            let items = {...this.formItems}
            axios.post('/api/questions',{
                'items':items
            })
            .then((result) => console.log(result))
            .catch((error) => console.log(error)).finally(() => this.$router.push('game'))                
        }
    },
    watch: {
        selectedOption(newVal) {
            switch(newVal) {
                case 1:
                    this.formItems.answers.answerA.correct = newVal
                    break;
                case 2:
                    this.formItems.answers.answerB.correct = newVal
                    break;
                case 3:
                    this.formItems.answers.answerC.correct = newVal
                    break;
                case 4:
                    this.formItems.answers.answerD.correct = newVal
                    break;
                default:
                    // code block
            }
        },
           
    },
}
</script>

<style scoped>

</style>