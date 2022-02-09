<template>
  <div>
    <header-component />
    <div class="d-flex">
      <div class="p-0 sidebar">
        <sidebar-component />
      </div>
      <div class="ms-5 ps-3 w-100">
        <div class="row">
          <div class="col-12 p-3">
            <page-title-component :datas="data" class="ms-3" />
            <div class="p-0 mx-3">
              <div class="card border-0 shadow-sm d-flex">
                <div class="card-header bg-white p-0">
                  <ul class="nav mx-3 border-0 d-flex">
                    <li class="nav-item mt-3">
                      <router-link class="nav-link text-muted active" :to="{name: 'Home'}">Open</router-link>
                    </li>
                    <li class="nav-item mt-3">
                      <router-link class="nav-link text-muted" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                    </li>
                    <div class="flex-fill d-flex justify-content-end align-item-center float-end py-2">
                      <input type="text" class="form-control w-25 h-auto mx-1 bg-light" placeholder="Search..." v-if="showSearch">
                      <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" :icon_class="searchClass" @btnClick="searchData()" />
                      <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-file-export" label="Export" />
                    </div>
                  </ul>
                </div>
                <div>
                  <div class="float-end">
                    <custom-dropdown />
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
                      <!-- <tbody>
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
                  </tbody> -->
                    </table>
                  </div>
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
import CustomButton from "../components/sub-components/CustomButton.vue";
import CustomDropdown from "../components/sub-components/CustomDropdown.vue";
import HeaderComponent from "../components/sub-components/HeaderComponent.vue";
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue";
import SidebarComponent from "../components/sub-components/SidebarComponent.vue";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

export default {
  name: "Home",
  components: {
    PageTitleComponent,
    CustomButton,
    HeaderComponent,
    SidebarComponent,
    CustomDropdown,
    FontAwesomeIcon,
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
      showSearch: false,
      searchClass: "fas fa-search",
    };
  },
  methods: {
    searchData() {
      if (this.showSearch === false) {
        this.showSearch = true;
        this.searchClass = "fas fa-times";
      } else {
        this.showSearch = false;
        this.searchClass = "fas fa-search";
      }
    },
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
