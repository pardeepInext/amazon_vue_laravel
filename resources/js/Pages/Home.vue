<template>
    <master :categories="categories">
        <Head  title="Amzon" />
       <slider />
       <category-slider :categories="categories" />
    </master>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Master from '../layouts/Master';
import Slider from '../components/home/Slider';
import CategorySlider from '../components/home/CategorySlider';
import { provide } from '@vue/runtime-core';

export default {
  components: { Master,Head,Slider,CategorySlider },
  props:['categories'],
  setup(props) {
    const categories = props.categories; 
    
    provide('categories',categories);
    
    return {
       
    };
  },
};
</script>

<style lang="scss" scoped>
</style>