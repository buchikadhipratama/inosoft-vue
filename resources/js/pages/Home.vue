<template>
  <div>
    <header-component />
    <div class="row">
      <div class="col-1">
        <sidebar-component />
      </div>
      <div class="col-11 p-2">
        <page-title-component :datas="data" />

        <div class="col-12 ">
          <div class="card border-0 shadow-sm d-flex">
            <div class="card-header bg-white p-0">
              <ul class="nav mx-3 border-0 d-flex">
                <li class="nav-item mt-3">
                  <router-link class="nav-link text-muted active" :to="{name: 'Home'}">Open</router-link>
                </li>
                <li class="nav-item mt-3">
                  <router-link class="nav-link text-muted" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                </li>
                <div class="flex-fill d-flex justify-content-end float-end py-2">
                  <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-search" />
                  <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-file-export" label="Export" />
                </div>
              </ul>
            </div>
            <div>
              <div class="float-end">
                <router-link :to="{name: 'CreateInstruction'}">
                  <custom-button btn_class="btn btn-info h-auto fas m-3 py-2" icon_class="fas fa-plus" label="Create 3rd Party Instruction" />
                </router-link>
              </div>
              <div class="mx-3">
                <table class="table">
                  <thead class="table-head text-light">
                    <tr>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Instruction ID
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Link To
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Instruction Type
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Assigned Vendor
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Attention Of
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Quotation No.
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        Invoice
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Customer PO
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
                      </th>
                      <th>
                        <div class="d-inline-flex">
                          <span>
                            Status
                          </span>
                          <div class="p-1">
                            <i class="fas fa-sort-up"></i>
                            <i class="fas fa-sort-down"></i>
                          </div>
                        </div>
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
      </div>
    </div>
  </div>
</template>

<script>
import CustomButton from "../components/sub-components/CustomButton.vue";
import HeaderComponent from "../components/sub-components/HeaderComponent.vue";
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue";
import SidebarComponent from "../components/sub-components/SidebarComponent.vue";

export default {
  name: "Home",
  components: {
    PageTitleComponent,
    CustomButton,
    HeaderComponent,
    SidebarComponent,
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
    };
  },
};
</script>

<style scoped>
.table-head {
  background-color: rgb(193, 199, 206);
}

.nav-item .active {
  border-bottom: 4px solid rgb(0, 171, 185) !important;
}

.fa-sort-up {
  position: absolute;
}

.fa-sort-down {
  position: absolute;
}
</style>
