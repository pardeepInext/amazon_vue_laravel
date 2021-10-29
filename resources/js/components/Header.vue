<template>
    <div class="header" ref="menu" :class="isScroll && 'scroll'">
        <Link :href="$route('home')"
            ><img class="header-logo" :src="`${$asset}img/logo.png`" alt="" />
        </Link>
        <div class="col-1">
            <div class="header-option">
                <span class="line-one">Hello</span>
                <span class="line-two location"
                    ><i class="bi bi-geo-alt"></i>Address</span
                >
            </div>
        </div>
        <div class="header_search">
            <div class="input-group">
                <button
                    class="btn dropdown-toggle search-cat text-capitalize"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    {{ searchCategory }}
                </button>
                <ul class="dropdown-menu">
                    <li
                        v-for="category in categories"
                        :key="category.id"
                        class="text-capitalize"
                        @click="selectCategory(category)"
                    >
                        <a class="dropdown-item">{{ category.name }}</a>
                    </li>
                </ul>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Recipient's username"
                    aria-label="Recipient's username"
                    aria-describedby="button-addon2"
                />
                <button
                    class="btn"
                    type="button"
                    id="button-addon2"
                    :style="{ background: '#F9BD69' }"
                >
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-option">
                <button
                    class="btn dropdown-toggle search-cat language-switch"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    English
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Hindi</a></li>
                    <li><a class="dropdown-item" href="#">Punjabi</a></li>
                    <li><a class="dropdown-item" href="#">Gujrati</a></li>
                </ul>
            </div>
            <Link :href="$route('category')" class="header-option">
                <span class="line-one">Hello, Sign in</span>
                <span class="line-two">Account & Lists</span>
            </Link>
            <div class="header-option">
                <span class="line-one">Returns</span>
                <span class="line-two">& Order</span>
            </div>
            <div class="header-option">
                <span class="line-two position-relative"
                    ><i class="bi bi-cart2" :style="{ fontSize: '26px' }">
                        <span
                            class="
                                position-absolute
                                top-0
                                start-100
                                translate-middle
                            "
                        >
                            <span :style="{ color: '#F07A11' }">0</span>
                        </span>
                    </i></span
                >
            </div>
        </div>
    </div>
    <div class="second-header">
        <button class="btn btn-sm my-1">
            <i class="fas fa-bars me-1"></i>
            All
        </button>
        <div>
            <Link
                v-for="(menu, index) in secondMenus"
                :key="index"
                :href="'#'"
                class="menu-link"
                >{{ menu }}</Link
            >
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import { onMounted, reactive, toRefs, ref, inject, provide, onUnmounted, computed } from "vue";
import "../../sass/header.scss";
export default {
    components: { Link },
    setup() {

        const menu = ref(null);
        const injectCategories = inject("categories");

        const state = reactive({
            secondMenus: [
                "Mobile",
                "Best Sellers",
                "Fashion",
                "Customer Service",
                "Prime",
                "Home & Kitchen",
                "Amazon Pay",
            ],
            isScroll: false,
            searchCategory: "All",
        });

        const selectCategory = (category) => {
            state.searchCategory = category.name;
        };
        const scroll = () =>  state.isScroll = window.scrollY > 65 ? true : false;
        
        onMounted(() => window.addEventListener("scroll", scroll));
        
        onUnmounted(() => window.removeEventListener('scroll',scroll))
        
        const categories = computed(() => [{name:'all'},...injectCategories])

        return {
            ...toRefs(state),
            menu,
            categories,
            selectCategory,
        };
    },
};
</script>

<style>
.scroll {
    position: sticky;
}
</style>
