import { createStore } from 'vuex'

export const store = createStore({
  state () {
    return {
      count: 1,
      isVisible: true
    }
  },
  mutations: {
    increment (state) {
      state.count++
    },
    hide(state) {
      state.isVisible = false
    }

  }
})
