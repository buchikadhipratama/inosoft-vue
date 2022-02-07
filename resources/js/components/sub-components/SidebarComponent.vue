<template>
  <!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3"> -->
  <nav class="sidebar d-flex flex-column bg-dark" style="width: 4.5rem;">
    <ul class="nav nav-pills flex-column mb-auto text-center" style="color:white; text-decoration: none;">
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-gauge" size="xl" />
      </li>
      <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-compass" size="xl" />
      </li>
      <!-- <li class="border-bottom p-3">
        <font-awesome-icon icon="fa-user-helmet-safety" size="xl" />
      </li> -->
      <li class="border-bottom p-3">
        <router-link :to="{name: 'CreateInstruction'}">
          <font-awesome-icon icon="fa-gauge" size="xl" />
        </router-link>
      </li>
      <li class="border-bottom">
        <router-link :to="{name: 'CreateInstruction'}">
          <custom-button btn_class="btn h-auto fas m-3 py-2" icon_class="fas fa-plus" />
        </router-link>
      </li>

    </ul>
    <!-- <div class="dropdown border-top">
      icon
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div> -->
  </nav>
  <!-- <div class="sidebar border-end bg-dark " id="sidebar-wrapper">
    <div class="list-group list-group-flush">
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
    </div>
  </div> -->
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
.sidebar {
  background: lightgrey;
  float: left;
  position: absolute;
  height: 100vh;
  border-right: 100%;
}
</style>
