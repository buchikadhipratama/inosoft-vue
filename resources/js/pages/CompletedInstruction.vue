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
                                    Instruction ID
                                </th>
                                <th>
                                    Link To
                                </th>
                                <th>
                                    Instruction Type
                                </th>
                                <th>
                                    Assigned Vendor
                                </th>
                                <th>
                                    Attention Of
                                </th>
                                <th>
                                    Quotation No.
                                </th>
                                <th>
                                    Invoice
                                </th>
                                <th>
                                    Customer PO
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(instruction, index) in instructions" :key="index">
                                <td>instruction.id</td>
                                <td>instruction.link</td>
                                <td>instruction.type</td>
                                <td>instruction.vendor</td>
                                <td>instruction.attention</td>
                                <td>instruction.quotation</td>
                                <td>instruction.invoice</td>
                                <td>instruction.customerPO</td>
                                <td>instruction.status</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
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
      ]
    }
  }
    
    
}
</script>

<style scoped>

.table-head {
    background-color: rgb(193, 199, 206);
}

.nav-item .active {
    border-bottom: 4px solid rgb(0, 171, 185) !important;
}

</style>