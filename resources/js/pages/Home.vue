<template>
  <div class="row m-4 justify-content-center">
        <div class="col-12 p-0">
            <page-title-component :datas="data"/>
        </div>
        <div class="col-12 p-0">
            <div class="card border-0 shadow-sm d-flex">
                <ul class="nav my-2 mx-3 border-0 d-flex">
                    <li class="nav-item">
                        <router-link class="nav-link text-muted active" :to="{name: 'Home'}">Open</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link text-muted" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue"

export default {
  name: "Home",
  components: {
    PageTitleComponent
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

