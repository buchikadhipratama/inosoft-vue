 <template>
 <div>

<header-component />
<div class="d-flex">
  

  <div class="p-0 sidebar">
    
    <sidebar-component />
  </div>
  <div class="ms-5 ps-5">
    <div class="row ">
      <div class="col-12 p-3">
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
                  <export-excel
                    class   = "btn btn-light h-auto m-1 border py-1"
                    :data   = "instructions"
                    worksheet = "Completed Instruction"
                    name    = "Completed_Instruction.xls">
                    <i class="fas fa-file-export"></i>
                    Export
                  </export-excel>
                </div>
              </ul>
            </div>
            <div class="mx-3 mt-5 pt-3">
              <table class="table">
                <thead class="table-head text-light">
                  <tr>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1 my-1">
                          Instruction ID
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer mt-2" @click="sort('desc', 'id')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'id')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'id')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Link To
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'link'" class="pointer" @click="sort('asc', 'link')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'link'" class="pointer mt-2" @click="sort('desc', 'link')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'link')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'link')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Instruction Type
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'type'" class="pointer" @click="sort('asc', 'type')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'type'" class="pointer mt-2" @click="sort('desc', 'type')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'type')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'type')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Assigned Vendor
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'vendor'" class="pointer" @click="sort('asc', 'vendor')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'vendor'" class="pointer mt-2" @click="sort('desc', 'vendor')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'vendor')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'vendor')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Attention Of
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'attention'" class="pointer" @click="sort('asc', 'attention')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'attention'" class="pointer mt-2" @click="sort('desc', 'attention')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'attention')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'attention')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Quotation No.
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'quotation'" class="pointer" @click="sort('asc', 'quotation')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'quotation'" class="pointer mt-2" @click="sort('desc', 'quotation')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'quotation')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'quotation')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex align-items-center my-1">
                        <span>
                          Invoice
                        </span>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Customer PO
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'customerPo'" class="pointer" @click="sort('asc', 'customerPo')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'customerPo'" class="pointer mt-2" @click="sort('desc', 'customerPo')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'customerPo')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'customerPo')"/>
                          </div>
                        </div>
                      </div>
                    </th>
                    <th>
                      <div class="d-inline-flex">
                        <span class="d-flex align-items-center my-1">
                          Status
                        </span>
                        <div class="px-2">
                          <font-awesome-icon icon="fa-caret-up" transform="down-3" v-if="sortData.direction === 'desc' && sortData.type === 'status'" class="pointer" @click="sort('asc', 'status')"/>
                          <font-awesome-icon icon="fa-caret-down" transform="down-3" v-else-if="sortData.direction === 'asc' && sortData.type === 'status'" class="pointer mt-2" @click="sort('desc', 'status')"/>                        
                          <div v-else class="d-flex flex-column">
                            <font-awesome-icon icon="fa-caret-up" transform="down-5" class="pointer" @click="sort('asc', 'status')"/>
                            <font-awesome-icon icon="fa-caret-down" transform="up-5" class="pointer" @click="sort('desc', 'status')"/>
                          </div>
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
                    <td class="text-center d-flex">
                      <span class="badge inventory-badge rounded-circle h-100 w-50">
                        {{instruction.invoice.length}}
                      </span>
                      <div class="dropdown ms-1">
                        <i v-if="instruction.invoice != ''" class="fas fa-chevron-down pointer" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>   
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li v-for="(invoice, index) in instruction.invoice" :key="'invoice' + index"><a class="dropdown-item" href="#">{{instruction.invoice[index]}}</a></li>
                        </ul>
                      </div>                    
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
  </div>
</div>
</template>

<script>
import { mapGetters } from "vuex";
import CustomButton from "../components/sub-components/CustomButton.vue";
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue";
import SidebarComponent from "../components/sub-components/SidebarComponent.vue";
import HeaderComponent from "../components/sub-components/HeaderComponent.vue";
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import ExportExcel from 'vue-excel-export/VueComment.vue'

export default {
  name: "CompletedInstruction",
  components: {
    PageTitleComponent,
    CustomButton,
    SidebarComponent,
    HeaderComponent,
    FontAwesomeIcon,
    ExportExcel
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
      sortData: {
        direction: 'asc',
        type: 'id'
      },
      showSearch: false,
      searchClass: 'fas fa-search',
      search: ''
    };
  },
  methods: {
    sort(direction, data) {
      this.sortData.direction = direction;
      this.sortData.type = data;
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

th {
  padding: 0.25rem;
}

.table-head {
  background-color: rgb(193, 199, 206);
}

tbody {
  border-top: none !important;
}

.nav-item .active {
  border-bottom: 4px solid rgb(0, 171, 185) !important;
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
