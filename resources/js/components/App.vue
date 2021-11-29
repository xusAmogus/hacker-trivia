<template>
    <div class="box">
        <Menu></Menu>
        <router-view></router-view>
        <Question v-show="isVisible()"></Question>
    </div>
</template>

<script>
import Menu from './Menu.vue'
import Question from './Question.vue'
import { router } from '../router/index.js'

export default {
   name: 'App',
   components: { Menu, Question},
   data() {
       return {
           
       }
   },
   methods: {
       isVisible() {
           return this.$store.state.isVisible
       }
   }
   
}
</script>

<style scoped>
    .box {
        background-color: cornflowerblue;
    }
</style>