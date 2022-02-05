 <template>
  <div>
    <header-component />
    <div class="row ">
      <div class="col-1 p-0">
        <sidebar-component />
      </div>
      <div class="col-11 p-3">
        <page-title-component :datas="data" />

        <div class="p-0 mx-3">
          <div class="card border-0 shadow-sm d-flex">
            <div class="card-header bg-white p-0">
              <ul class="nav mx-3 border-0 d-flex">
                <li class="nav-item mt-3">
                  <router-link class="nav-link text-muted" :to="{name: 'Home'}">Open</router-link>
                </li>
                <li class="nav-item mt-3">
                  <router-link class="nav-link text-muted active" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                </li>
                <div class="flex-fill d-flex justify-content-end align-items-center float-end py-2">
                  <input type="text" class="form-control w-25 h-75 mx-1 bg-light" placeholder="Search" v-if="showSearch" v-model="search">
                  <custom-button btn_class="btn btn-light h-auto m-1 border py-1" :icon_class="searchClass" @btnClick="searchData()"/>
                  <custom-button btn_class="btn btn-light h-auto m-1 border py-1" icon_class="fas fa-file-export" label="Export" />
                </div>
              </ul>
            </div>
            <div class="mt-5 mx-3">
              <table class="table">
                <thead class="table-head text-light">
                  <tr>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Instruction ID
                        </span>
                        <div class="px-2">
                          <i v-if="sortDirection === 'desc'" class="fas fa-sort-up pointer" @click="sort('asc', 'id')"></i>
                          <i v-else-if="sortDirection === 'asc'" class="fas fa-sort-down pointer" @click="sort('desc', 'id')"></i>
                          <div v-else class="d-flex flex-column">
                            <i class="fas fa-caret-right pointer" @click="sort('asc', 'id')"></i>
                            <i class="fas fa-caret-left pointer" @click="sort('desc', 'id')"></i>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Link To
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'link')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'link')"></i>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Instruction Type
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'type')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'type')"></i>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Assigned Vendor
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'vendor')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'vendor')"></i>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Attention Of
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'attention')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'attention')"></i>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Quotation No.
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'quotation')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'quotation')"></i>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex align-items-center">
                        <span>
                          Invoice
                        </span>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Customer PO
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'customerPo')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'customerPo')"></i>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center">
                          Status
                        </span>
                        <div class="px-2 d-flex flex-column">
                          <i class="fas fa-caret-right pointer" @click="sort('asc', 'status')"></i>
                          <i class="fas fa-caret-left pointer" @click="sort('desc', 'status')"></i>
                        </div>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(instruction, index) in filteredData" :key="index">
                    <td>{{instruction.id}}</td>
                    <td>{{instruction.link}}</td>
                    <td class="text-center">
                      <i class="fas fa-truck" v-if="instruction.type == 'LI'"></i>
                      <i class="fas fa-wrench" v-else></i>
                      {{instruction.type}}
                    </td>
                    <td>{{instruction.vendor}}</td>
                    <td>{{instruction.attention}}</td>
                    <td>{{instruction.quotation}}</td>
                    <td class="text-center">
                      <span class="badge inventory-badge rounded-circle">
                        {{instruction.invoice}}
                      </span>
                      <i v-if="instruction.invoice != ''" class="fas fa-chevron-down pointer"></i>
                    </td>
                    <td>{{instruction.customerPo}}</td>
                    <td>
                      <span v-if="instruction.status == 'Completed'" class="badge badge-completed rounded-pill instruction-badge">
                        {{instruction.status}}
                      </span>
                      <span v-else-if="instruction.status == 'Canceled'" class="badge badge-canceled rounded-pill instruction-badge">
                        {{instruction.status}}
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import CustomButton from "../components/sub-components/CustomButton.vue";
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue";
import SidebarComponent from "../components/sub-components/SidebarComponent.vue";
import HeaderComponent from "../components/sub-components/HeaderComponent.vue";

export default {
  name: "CompletedInstruction",
  components: {
    PageTitleComponent,
    CustomButton,
    SidebarComponent,
    HeaderComponent,
  },
  data() {
    return {
      data: [
        {
          name: "Vendor Management",
          to: "Home",
        },
        {
          name: "3rd Party Instruction",
          to: "Home",
        },
      ],
      sortDirection: "asc",
      showSearch: false,
      searchClass: 'fas fa-search',
      search: ''
    };
  },
  methods: {
    sort(direction, data) {
      if (data === "id" && direction === "asc") {
        this.sortDirection = "asc";
      } else if (data === "id" && direction === "desc") {
        this.sortDirection = "desc";
      } else {
        this.sortDirection = false;
      }
      const payload = { direction, data };
      this.$store.dispatch("thirdPartyInstruction/sort", payload);
    },
    searchData(){
      if(this.showSearch === false){
        this.showSearch = true
        this.searchClass = 'fas fa-times'
      }else{
        this.showSearch = false
        this.searchClass = 'fas fa-search'
      }
    }
  },
  computed: {
    ...mapGetters({
      instructions: "thirdPartyInstruction/getInstructions",
    }),
    filteredData(){
      const search = this.search.toLowerCase()
      return this.instructions.filter(instruction => {
          const id = instruction.id.toString().toLowerCase()
          const link = instruction.link.toString().toLowerCase()
          const type = instruction.type.toString().toLowerCase()
          const vendor = instruction.vendor.toString().toLowerCase()
          const attention = instruction.attention.toString().toLowerCase()
          const quotation = instruction.quotation.toString().toLowerCase()
          const customerPo = instruction.customerPo.toString().toLowerCase()
          const status = instruction.status.toString().toLowerCase()

          return id.includes(search) || link.includes(search) || type.includes(search) || vendor.includes(search) || attention.includes(search) || quotation.includes(search) || customerPo.includes(search) || status.includes(search)
      })
    }
  },
};
</script>

<style scoped>
.table-head {
  background-color: rgb(193, 199, 206);
}

tbody {
  border-top: none !important;
}

.nav-item .active {
  border-bottom: 4px solid rgb(0, 171, 185) !important;
}

.fa-caret-right {
  transform: rotateZ(-90deg);
}

.fa-caret-left {
  transform: rotateZ(-90deg);
}

.pointer {
  cursor: pointer;
}

.instruction-badge {
  width: 6rem;
}

.inventory-badge {
  background-color: rgb(0, 171, 185);
}

.badge-completed {
  background-color: rgb(0, 176, 111);
}

.badge-canceled {
  background-color: rgb(193, 199, 206);
}
</style>
