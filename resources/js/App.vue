<template>
  <div>
    <router-view />
  </div>
</template>

<script>
export default {
  name: "app",
};
</script> 

<style>
.badge-completed {
  background-color: rgb(0, 176, 111);
}

.badge-canceled {
  background-color: rgb(193, 199, 206);
}

.badge-inprogress {
  background-color: rgb(230, 238, 247);
  color: gray;
}

.instruction-badge {
  width: 6rem;
}
</style>

