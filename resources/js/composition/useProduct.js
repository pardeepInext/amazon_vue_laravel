import { ref, toRefs, reactive, computed } from "@vue/reactivity";

const useProduct = (data) => {
 
    const selectedChild = ref([]);
    const selectedImages = ref([]);
    
    /* children */
    if (data.children.lenght > 0) selectdImage = data.children[0];

    /* images */
    const images = computed(() => {
        return data.images.lenght == 0 ? data.images : selectedChild.images[0].image;
    });


    return {
        product,
        images,
    }
}

const children = (children) => {
    selectdImage = children.images[0].image
}


export default useProduct;