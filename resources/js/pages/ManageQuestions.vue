<template>
    <button  @click="showModal() + toggle();">create question</button>
    <button  @click="showModal() + toggle();">edit question</button>
    <button  @click="showModal() + toggle();">delete question</button>
    <modal v-show="isModalVisible" @close="closeModal">
    </modal>
</template>

<script>
import modal from '../components/Modal.vue'

export default {
    name: 'createQuestion',
    components: { modal },
    data() {
        return  {
            isModalVisible: false,
        }
    },
    methods: {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
        toggle() {            
            this.$store.commit('hide')           
        }
    }
    
}
</script>
