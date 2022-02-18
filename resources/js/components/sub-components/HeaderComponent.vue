<template>
  <!-- <div> -->
  <header class="bg-dark text-white" id="head">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="row m-2">
          <a class="navbar-brand" href="#">
            <img src="/inosoft-logo.png" alt="/public/inosoft-logo.png" width="100" height="30">
          </a>
        </div>
        <div class="row">
          <span>Good Afternoon, inosoft bootcamp</span>
        </div>
        <div class="row m-2">
          <div class="d-flex">
            <custom-button btn_class="btn btn-outline-light h-auto fas m-3 py-2" icon_class="fas fa-user" />
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- </div> -->
</template>

<script>
import CustomButton from "./CustomButton.vue";

export default {
  name: "HeaderComponent",
  props: {
    title: {
      type: String,
      default: "Header",
    },
  },
  components: {
    CustomButton,
  },
};
</script>

