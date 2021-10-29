<template>
  <master>
    <Head :title="product.name" />
    <div class="container my-5">
      <div class="row">
        <div class="col-md-1">
          <button
            class="btn btn-sm bg-transparent variatio-btn my-1"
            v-for="image in images"
            :key="image.id"
            @click="() => (selectedImage = image.image)"
          >
            <img :src="image.image" alt="btn image" width="20" height="40" />
          </button>
        </div>
        <div class="col-md-3">
          <img
            :src="selectedImage"
            class="img-fluid"
            alt="product image"
            height="300"
            style="object-fit: 300px"
          />
        </div>
        <div class="col-md-4">
          <h6 class="font-weight-bold">
            {{ product.name }}
          </h6>
          <p>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star-half-alt text-warning"></i>
          </p>
          <div class="dropdown-divider mt-3"></div>
          <p class="mb-2">
            <span class="text-muted mr-2">M.R.P.:</span>
            <span class="text-danger font-weight-bold">
              <i class="fas fa-rupee-sign"></i>
              {{ stock.price }} /-
            </span>
          </p>
          <div class="row" style="font-size: 12px">
            <div class="col-md-3">
              <img
                src="/img/product_main/no_contact.png"
                width="35"
                height="35"
                class="rounded"
                alt=""
                srcset=""
              />
              <br />
              <a
                href="javascript:void(0);"
                role="button"
                data-bs-toggle="popover"
                title="Popover title"
                data-bs-content="And here's some amazing content. It's very engaging. Right?"
                >No contact delivery</a
              >
            </div>
            <div class="col-md-3">
              <img
                src="/img/product_main/seven.png"
                width="35"
                height="35"
                class="rounded"
                alt=""
                srcset=""
              />
              <br />
              <a href="#">7 Day Replacement</a>
            </div>
            <div class="col-md-3">
              <img
                src="/img/product_main/amazon_del.png"
                width="35"
                height="35"
                class="rounded"
                alt=""
                srcset=""
              />
              <br />
              <a href="#">Amazon Delivered</a>
            </div>
            <div class="col-md-3">
              <img
                src="/img/product_main/one_year.png"
                width="35"
                height="35"
                class="rounded"
                alt=""
                srcset=""
              />
              <br />
              <a href="#">1 Year Waranty</a>
            </div>
          </div>
          <div class="dropdown-divider mt-3"></div>
          <p>
            Sold by:
            <a href="#">ABC Seller</a>
          </p>
          <p class="text-danger font-weight-bold" v-if="stock.stock == 0">
            Out of Stock
          </p>
          <p v-else class="text-success font-weight-bold">In stock.</p>
          <div v-if="children != null">
            <p class="text-capitalize">
              <span class="text-muted">Color:</span>
              {{ childName }}
            </p>
            <div class="d-flex">
              <button class="btn btn-sm bg-transparent child-product"
                v-for="child in children"
                :key="child.id"
                @click="childchange(child)"
              >
                <img
                  :src="child.images[0].image"
                  alt="btn image"
                  width="40"
                  height="60"
                />
              </button>
            </div>
          </div>
          <div class="ml-n3">
            <ul>
              <li v-for="detail in details" :key="detail.id">
                {{ detail.detail }}
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="card shadow rounded float-md-right">
            <div class="card-body">
              <div class="form-group">
                <label for="quantity">Quantity:</label>
                <select
                  class="form-control form-control-sm d-inline ml-2"
                  style="width: 50px"
                  id="quantity"
                >
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>10</option>
                </select>
              </div>

              <p class="mb-0">
                <span class="text-muted mr-2">M.R.P.:</span>
                <span class="text-danger font-weight-bold"
                  ><i class="fas fa-rupee-sign"></i> 8000/-</span
                >
              </p>
              <button
                type="button"
                class="btn btn-warning btn-sm btn-cart mt-2 me-2"
              >
                Add to cart
              </button>

              <a class="btn btn-primary btn-sm btn-cart mt-2">Buy Now</a>

              <div class="dropdown-divider"></div>
              <a href="#">
                <i class="fas fa-map-marker-alt text-dark"></i>
                Select Delivery Location
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row border-bottom border-top">
        <div class="col-md-12">
          <p class="text-danger font-weight-bold">Save Extra with 5 offers</p>
          <ul>
            <li>
              <span class="text-danger">No Cost EMI:</span> Avail No Cost EMI on
              select cards for orders above ₹3000
            </li>
            <li>
              <span class="text-danger">Exchange Offer:</span>
              Enter your pincode to view Exchange offer
            </li>
            <li>
              <span class="text-danger">Cashback (2):</span> 5% back with Amazon
              Pay ICICI Bank Credit card for Prime-members. 3% back for
              everybody else. Here's how
            </li>
            <li>
              <span class="text-danger">Bank Offer (2): </span>
              Get 5% up to Rs. 1500 Instant Discount on Bank of Baroda Credit
              EMI transactions Here's how
            </li>
            <li>
              <span class="text-danger">Partner Offers (3): </span>
              Buy now & pay next month at 0% interest or pay in EMIs with Amazon
              Pay Later. Instant credit upto ₹20,000. Check eligibility here!
              Here's how
            </li>
          </ul>
        </div>
      </div>

      <div class="row border-bottom mt-3">
        <div class="col-md-12 my-3">
          <h6 class="text-warning font-weight-bold">Product description</h6>
          <p class="ml-3">
            Colour: Sea Blue | Size name:32 GB Take strikingly clear photos with
            the 13MP + 2MP AI dual camera. Capture the beauty of any scene,
            while the AI-powered portrait mode with Beautify blurs the
            background to create portraits that stand out. The octa-core
            processor takes operational efficiency to the next level which
            results in brilliant performance.
          </p>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-md-4">
          <p class="text-capitalize font-weight-bold">avg. customer review</p>
          <button class="btn btn-sm bg-transparent">
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <span class="rating">& Up</span>
          </button>
          <br />
          <button class="btn btn-sm bg-transparent">
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <span class="rating">& Up</span>
          </button>
          <br />
          <button class="btn btn-sm bg-transparent">
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <span class="rating">& Up</span>
          </button>
          <br />
          <button class="btn btn-sm bg-transparent">
            <i class="fas fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <i class="far fa-star" style="color: #ffa41c"></i>
            <span class="rating">& Up</span>
          </button>
          <br />
        </div>
      </div>
    </div>
  </master>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Master from "../../layouts/Master.vue";
import {
  computed,
  onMounted,
  provide,
  reactive,
  ref,
  toRefs,
} from "@vue/runtime-core";
import ImageZoom from "js-image-zoom";
import useProduct from "../../composition/useProduct";

export default {
  components: { Master, Head },
  props: ["categories", "product"],
  setup(props) {
    const product = props.product;
    const state = reactive({
      categories: props.categories,
      selectedChild: null,
      images: [],
      selectedImage: null,
      variations: null,
      variation: null,
      stock: null,
      details: null,
      childName: null,
      children: null,
    });

    /* children */
    if (product.children.length > 0) {
      state.selectedChild = product.children[0];
      state.variations = state.selectedChild.variations;
      state.variation = state.variations[0];
      state.children = product.children;
      state.childName = state.selectedChild.name;
    }

    /* images */

    state.images =
      product.images.length == 0 ? state.selectedChild.images : product.images;

    state.selectedImage = state.images[0].image;

    /* stock */
    state.stock =
      state.variation != null ? state.variation.stock : product.stock;

    state.details =
      product.details.length == 0
        ? state.variation.variation_details
        : product.details;

    provide("categories", state.categories);

    return {
      ...toRefs(state),
    };
  },
  methods: {
    childchange(child){
        console.log(child);
    }
  },
};
</script>

<style>
.child-product img {
  object-fit: contain;
}
.variatio-btn {
  border: 1px solid #d4d1d1;
}
a {
  color: #1f90b2;
}

.btn-cart {
  border-radius: 16px;
  padding: 4px 15px;
  font-weight: bold;
}

.disable-cart {
  pointer-events: none;
  opacity: 0.5;
  cursor: not-allowed;
}
</style>
