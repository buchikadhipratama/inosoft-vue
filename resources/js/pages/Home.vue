<template>
  <div>
    <div class="mt-4 ms-3">
      <page-title-component :datas="data"/>
    </div>
    <div>
      <instruction-card/>
    </div>
    <router-link :to="{ name: 'ExamplePage1' }">ExamplePage1</router-link>
    <instruction-table thead_class="table-secondary"/>
  </div>
</template>

<script>
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue"
import InstructionTable from "../components/sub-components/InstructionTable.vue"
import InstructionCard from '../components/InstructionCard.vue'

export default {
  name: "Home",
  components: {
    PageTitleComponent,
    InstructionTable,
    InstructionCard
  },
  data() {
    return {
      data: [
        {
          name: "Vendor Management",
          to: "Home"
        },
        {
          name: "3rd Party Instruction",
          to: "Home"
        }
      ]
    }
  }
}
</script>

