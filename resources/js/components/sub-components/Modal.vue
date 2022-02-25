<template>
  <div class="modal">
    <div class="modal-dialog">
      <slot></slot>
    </div>
  </div>
</template>
<script>
import CustomButton from "../sub-components/CustomButton.vue";

export default {
  components: {
    CustomButton,
  },
  name: "modal",
  files: [],
  data() {
    return {
      //
    };
  },
  methods: {
    closeModal() {
      this.$emit("close-modal");
    },

  },
};
</script>
<style scoped>
.modal {
  /* position: fixed; */
  top: 50%;
  justify-content: center;
  align-items: center;
  outline: 0;
  background-color: rgba(0, 0, 0, 0.6);
}
.btn-second:focus {
  outline: none;
  box-shadow: none;
}
</style>
