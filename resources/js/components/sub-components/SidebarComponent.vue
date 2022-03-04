<template>
  <div class="border-end bg-secondary" id="sidebar-wrapper">
    <ul class="nav nav-pills flex-column mb-auto text-center" style="color:white; text-decoration: none;">
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-gauge" size="xl" />
      </li>
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-compass" size="xl" />
      </li>
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-helmet-safety" size="xl" />
      </li>
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-coins" size="xl" />
      </li>
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-cubes" size="xl" />
      </li>
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-gears" size="xl" />
      </li>
    </ul>
  </div>
</template>

<script>
import CustomButton from "./CustomButton.vue";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

export default {
  name: "SidebarComponent",
  components: {
    "custom-button": CustomButton,
    FontAwesomeIcon,
  },
};
</script>

<style scoped>
#sidebar-wrapper {
  height: 100vh;
  position: fixed;
  margin-top: 10px;
}
</style>

