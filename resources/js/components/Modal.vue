<template>
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
              default header
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              <slot name="form"><Form></Form></slot>
            </slot>
            
          </div>

          <div class="modal-footer">
            <slot name="footer">
              default footer
              <button class="modal-default-button" @click="close">
                OK
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import Form from './Form.vue'

export default {
    components: { Form },
    methods: {
        close() {
        this.$emit('close')
      },
    }
   
}
</script>