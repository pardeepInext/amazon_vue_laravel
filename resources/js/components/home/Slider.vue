<template>
    <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
    >
        <div class="carousel-inner">
            <div
                v-for="(image, index) in images"
                :key="index"
                class="carousel-item"
                :class="index == 0 && 'active'"
            >
                <img :src="`${$asset}img/home_slider/${image}`" />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true" />
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true" />
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
import { reactive, toRefs } from "vue";
export default {
    setup() {
        const state = reactive({
            images: [
                "slide_1.jpg",
                "slide_2.jpg",
                "slide_3.jpg",
                "slide_4.jpg",
            ],
        });

        return {
            ...toRefs(state),
        };
    },
};
</script>

<style></style>
