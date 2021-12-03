<template>
    <div class="box">
        <Menu></Menu>
        <router-view></router-view>        
    </div>
</template>

<script>
import Menu from './Menu.vue'
import Question from './Question.vue'

import { router } from '../router/index.js'

export default {
   name: 'App',
   components: { Menu }  
}
</script>

<style scoped>
    .box {
        background-color: cornflowerblue;
    }
</style>