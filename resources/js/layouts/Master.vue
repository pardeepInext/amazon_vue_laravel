<template>
  <Header />
  <transition name="fade">
    <div v-if="isLoaded">
      <slot />
    </div>
  </transition>
  <Footer />
</template>

<script>
import Header from "../components/Header";
import Footer from "../components/Footer";
import useCategory from '../composition/useCategory';
import {
  reactive,
  toRefs,
  onMounted,
  onUnmounted,
  onUpdated,
  nextTick,
  provide,
} from "@vue/runtime-core";

export default {
  components: {
    Header,
    Footer,
  },
  // props: ["categories"],
  setup(props) {

    const {fetchCategory, categories} = useCategory();
    
    const state = reactive({
      isLoaded: false,
    });

    // categories && provide('categories',categories.value)

    onMounted(() => {
      state.isLoaded = true;
      fetchCategory();
    });

  
    return {
      ...toRefs(state),
      categories
    };
  },
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
