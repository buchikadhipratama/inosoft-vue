<template>
  <div class="btn-group" role="group">
    <custom-button btn_class="btn btn-info h-auto fas m-3 py-2" data-bs-toggle="dropdown" aria-expanded="false" icon_class="fas fa-plus" label=" Create 3rd Party Instruction" />
    <ul class="dropdown-menu w-100 " aria-labelledby="btnGroupDrop1">
      <li>
        <router-link :to="{name: 'LogisticInstruction'}" class="dropdown-item">
          <custom-button btn_class="btn" aria-expanded="false" icon_class="fas fa-truck" label=" Logistic Instruction" />
        </router-link>
      </li>
      <li>
        <router-link :to="{name: 'ServiceInstruction'}" class="dropdown-item">
          <custom-button btn_class="btn" icon_class="fas fa-wrench" label=" Service Instruction" />
        </router-link>

      </li>
    </ul>
  </div>
</template>

<script>
import CustomButton from "./CustomButton.vue";

export default {
  name: "CustomDropdown",
  props: {
    icon_class: {
      type: String,
      default: "",
    },
    btn_class: {
      type: String,
      default: "btn-primary",
    },
    styles: {
      type: String,
      default: "",
    },
    label: {
      type: String,
      default: "",
    },
  },
  methods: {
    handleClick() {
      this.$emit("btnClick");
    },
  },
  components: {
    CustomButton,
  },
};
</script>

<style scoped>
span {
  font-family: Nunito, serif;
}
</style>
