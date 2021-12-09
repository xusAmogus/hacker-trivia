<template>
    <form>
        <div class="form-group">
            <label for="text">Question:</label>
            <input type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter question">
            
            <label for="text">Answer:</label>
            <input type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
            
            <label for="text">Answer:</label>
            <input type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
            

            <label for="text">Answer:</label>
            <input type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
            

            <label for="text">Answer:</label>
            <input type="text" class="form-control" id="text1" aria-describedby="text1" placeholder="Enter answer">
            
             
           
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
               
        }                            
    },
}
</script>

<style scoped>

</style>