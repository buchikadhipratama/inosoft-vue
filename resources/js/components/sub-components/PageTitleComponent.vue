<template>
  <div>
    <div class="mt-4">
      <h2>{{title}}</h2>
    </div>
    <div>
      <bread-crumb :datas="datas" />
    </div>
  </div>
</template>

<script>
import BreadCrumb from "./BreadCrumb.vue";

export default {
  name: "PageTitleComponent",
  props: {
    title: {
      type: String,
      default: "3rd Party Instruction",
    },
    datas: {
      type: Array,
      default: () => {
        return [];
      },
    },
  },
  components: {
    BreadCrumb,
  },
};
</script>
