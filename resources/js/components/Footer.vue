<template>
  <div class="container-fluid px-0" :style="{background:'#232F3E'}">
    <a href="#pageTop" class="btn btn-block mb-5 w-100 back-to-top"
      >Back to Top</a
    >

    <div class="container">
      <div class="row text-white mb-5">
        <div class="col-md-3">
          <h5>Get to know us</h5>
          <a href="#" class="text-white">About</a> <br />
          <a href="#" class="text-white">Careers</a> <br />
          <a href="#" class="text-white">Press Release</a> <br />
          <a href="#" class="text-white">Investment</a> <br />
          <a href="#" class="text-white">Offers</a> <br />
        </div>

        <div class="col-md-3">
          <h5>Connect With Us</h5>
          <a href="#" class="text-white">Facebook</a> <br />
          <a href="#" class="text-white">Twitter</a> <br />
          <a href="#" class="text-white">Instagram</a> <br />
        </div>

        <div class="col-md-3">
          <h5>Make Money With Us</h5>
          <a href="#" class="text-white">Sell on Amazon</a> <br />
          <a href="#" class="text-white">Affiliate Marketing</a> <br />
          <a href="#" class="text-white">Fullfilment Center</a> <br />
          <a href="#" class="text-white">Advertise Your Product</a> <br />
          <a href="#" class="text-white">Amazon Pay</a> <br />
        </div>

        <div class="col-md-3">
          <h5>Let Us Help You</h5>
          <a href="#" class="text-white">COVID 19</a> <br />
          <a href="#" class="text-white">Your Account</a> <br />
          <a href="#" class="text-white">Returns</a> <br />
          <a href="#" class="text-white">Funding</a> <br />
          <a href="#" class="text-white">Help</a> <br />
        </div>
      </div>
    </div>

    <div class="dropdown-divider mt-3"></div>

    <div class="row mt-3 mx-0 px-0">
      <div class="col-md-12 text-center">
        <img
          src="img/amazon_logo_white.png"
          height="30"
          width="100"
          alt="amazon logo white footer"
        />
      </div>
    </div>

    <!-- Sub footer starts -->
    <div
      class="py-3 mt-3 shadow-lg"
      style="background-color: #131A22; font-size: 12px"
    >
      <div class="container">
        <div class="row my-5">
          <div class="col-md-12 text-center text-white">
            <p>
              <i class="far fa-copyright"></i> 1996-{{
                new Date().getFullYear()
              }}, Amazon.com Inc.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub footer ends -->
  </div>
</template>

<script>
export default {};
</script>

<style>
.back-to-top {
  color: #fff;
  background: #37475a;
}
.back-to-top:hover{
  background:#6a7f99;
  color: #fff;
}

.dropdown-divider{
  border-top: 1px solid rgb(255 246 246 / 21%);
}

</style>