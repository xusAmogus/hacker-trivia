<template>
    <div><ul class="menu"><li v-for="items in menu"><router-link :to="items.path" >{{items.item}} || </router-link></li></ul></div>
</template>

<script>
export default {
    name:'Menu',
    components: '',
    data(){
        return {
            menu: [{item : 'Manage Questions', path: '/manage'},{ item:'Game', path:'/game'}],            
        }                            
    },
    
   
    methods: {
             
    }
}
</script>

<style scoped>
    .menu {
        display: flex;
        text-decoration: none;
        background: black;
        list-style-type: none;
    }

    .menu li a.btn {
        color: chartreuse;
    }
    @keyframes menuHover {
        0%   {background-color:black; left:0px; top:0px;}
        50%  {background-color:cornflowerblue; left:200px; top:0px;}        
        100%  {background-color:black; left:0px; top:200px;}        
    }
    .menu li a.btn:hover {
        animation: menuHover 2s ease-in-out -200ms infinite;
    }
</style>