<template>
    <form @submit="processForm" action="#" method="post">
        <div class="form-group">
            <label for="text">Question:</label>
            <input v-model="formItems.question" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter question">
            
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerA" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
            
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerB" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
 
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerC" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
        
            <label for="text">Answer:</label>
            <input v-model="formItems.answers.answerD" type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
        </div>
        <div class="form-group">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    Select correct answer
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                </ul>
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
                    answerA: '',
                    answerB: '',
                    answerC: '',
                    answerD: ''
                }
            }
        }                            
    },
    methods: {
        processForm: function (e) {
            e.preventDefault()
            console.log(this.formItems)
        }
    },
}
</script>

<style scoped>

</style>