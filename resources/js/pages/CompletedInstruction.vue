 <template>
    <div class="row m-4 justify-content-center">
        <div class="col-12 p-0">
            <page-title-component :datas="data"/>
        </div>
        <div class="col-12 p-0">
            <div class="card border-0 shadow-sm d-flex">
                <div class="card-header bg-white p-0">
                    <ul class="nav mx-3 border-0 d-flex">
                        <li class="nav-item mt-3">
                            <router-link class="nav-link text-muted" :to="{name: 'Home'}">Open</router-link>
                        </li>
                        <li class="nav-item mt-3">
                            <router-link class="nav-link text-muted active" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                        </li>
                        <div class="flex-fill d-flex justify-content-end float-end py-2">
                            <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-search"/>
                            <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-file-export" label="Export"/>
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
                            <tr v-for="(instruction, index) in instructions" :key="index">
                                <td>{{instruction.id}}</td>
                                <td>{{instruction.link}}</td>
                                <td class="text-center">
                                    <i class="fas fa-truck" v-if="instruction.type == 'LI'"></i>
                                    <i class="fas fa-dolly" v-else></i>
                                    {{instruction.type}}</td>
                                <td>{{instruction.vendor}}</td>
                                <td>{{instruction.attention}}</td>
                                <td>{{instruction.quotation}}</td>
                                <td class="text-center">
                                    <span class="badge bg-secondary rounded-circle">
                                        {{instruction.invoice}}
                                    </span>
                                    <i v-if="instruction.invoice != ''" class="fas fa-chevron-down pointer"></i>
                                </td>
                                <td>{{instruction.customerPo}}</td>
                                <td>
                                    <span v-if="instruction.status == 'Completed'" class="badge bg-success rounded-pill instruction-badge">
                                        {{instruction.status}}
                                    </span>
                                    <span v-else-if="instruction.status == 'Canceled'" class="badge bg-secondary rounded-pill instruction-badge">
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
</template>

<script>
import {mapGetters} from 'vuex'
import CustomButton from '../components/sub-components/CustomButton.vue'
import PageTitleComponent from '../components/sub-components/PageTitleComponent.vue'

export default {
    name: "CompletedInstruction",
    components: { 
        PageTitleComponent,
        CustomButton
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
      ],
      sortDirection: 'asc'
    }
  },
  methods: {
      sort(direction, data){
          if(data === 'id' && direction === 'asc'){
              this.sortDirection = 'asc'
          }else if(data === 'id' && direction === 'desc'){
              this.sortDirection = 'desc'
          }else{
              this.sortDirection = false
          }
          const payload = {direction, data}
          this.$store.dispatch('thirdPartyInstruction/sort', payload)
      }
  },
  computed: {
      ...mapGetters({
          instructions: 'thirdPartyInstruction/getInstructions'
      })
    }
  }
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

</style>