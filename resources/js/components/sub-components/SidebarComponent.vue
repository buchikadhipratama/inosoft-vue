<template>
  <div class="border-end bg-dark" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
      <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
    </div>
  </div>
</template>

<script>
import CustomButton from "./CustomButton.vue";

export default {
  name: "SidebarComponent",
  components: {
    "custom-button": CustomButton,
  },
};
</script>

