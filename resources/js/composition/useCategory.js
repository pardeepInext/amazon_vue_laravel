import { ref } from "@vue/reactivity";
import axios from "axios";

const useCategory = () => {
   
    const categories = ref([]);

    const fetchCategory = async () => {
        let response = await axios.get(route("fetch-categories"));
        categories.value = response.data;
    };

    return { categories, fetchCategory };
};

export default useCategory;
