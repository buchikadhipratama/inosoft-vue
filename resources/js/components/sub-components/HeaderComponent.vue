<template>
  <div>
    <header class="bg-dark text-white">
      <nav class="navbar">
        <div class="row m-2">
          <a class="navbar-brand" href="#">
            <img src="/inosoft-logo.png" alt="/public/inosoft-logo.png" width="100" height="30">
          </a>
        </div>
      </nav>
    </header>
  </div>
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

