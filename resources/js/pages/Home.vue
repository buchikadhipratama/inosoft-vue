<template>
  <!-- <div> -->
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
                    <div class="flex-fill d-flex justify-content-end align-items-center float-end py-2">
                      <input type="text" class="form-control w-25 h-auto mx-1 bg-light" placeholder="Search..." v-if="showSearch" v-model="search">
                      <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" :icon_class="searchClass" @btnClick="searchData()" />
                      <export-excel class="btn btn-light h-auto m-1 border py-1" :data="dashboards" worksheet="Dashboard" name="Dashboard.xls">
                        <i class="fas fa-file-export"></i>
                        Export
                      </export-excel>
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
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Link To
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Instruction Type
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Assigned Vendor
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Attention Of
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Quotation No.
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Customer PO
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                          <th>
                            <div class="d-inline-flex">
                              <span>
                                Status
                              </span>
                              <div class="px-2">
                                <font-awesome-icon icon="fa-caret-up" v-if="sortData.direction === 'desc' && sortData.type === 'id'" class="pointer" @click="sort('asc', 'id')" />
                                <font-awesome-icon icon="fa-caret-down" v-else-if="sortData.direction === 'asc' && sortData.type === 'id'" class="pointer" @click="sort('desc', 'id')" />
                                <div v-else class=" d-flex flex-column mt-1">
                                  <i class="fas fa-sort-up pointer" @click="sort('asc', 'id')" />
                                  <i class="fas fa-sort-down pointer" @click="sort('desc', 'id')" />
                                </div>
                              </div>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="pointer">
                        <tr @click="toDetail(dashboard._id)" v-for="dashboard in filteredData" :key="dashboard._id">
                          <td>{{ dashboard.instruction_id }}</td>
                          <td class="text-left">
                            <span v-if="dashboard.link_to == ''">
                              -
                            </span>
                            <span>
                              {{ dashboard.link_to }}
                            </span>
                          </td>
                          <td class="text-center">
                            <i class="fas fa-truck" v-if="dashboard.type == 'LI'"></i>
                            <i class="fas fa-wrench" v-else></i>
                            {{dashboard.type}}
                          </td>
                          <td>{{ dashboard.assign_vendor }}</td>
                          <td>{{ dashboard.attention }}</td>
                          <td>{{ dashboard.quotation }}</td>
                          <td>{{ dashboard.customer_po }}</td>
                          <td>
                            <span v-if="dashboard.status == '0'" class="badge badge-completed rounded-pill instruction-badge">
                              completed
                            </span>
                            <span v-if="dashboard.status == '1'" class="badge badge-progress rounded-pill instruction-badge">
                              in progress
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
  </div>
</template>

<script>
import CustomButton from "../components/sub-components/CustomButton.vue";
import CustomDropdown from "../components/sub-components/CustomDropdown.vue";
import HeaderComponent from "../components/sub-components/HeaderComponent.vue";
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue";
import SidebarComponent from "../components/sub-components/SidebarComponent.vue";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { mapGetters } from "vuex";
import ExportExcel from "vue-excel-export/VueComment.vue";
import { mapActions } from "vuex";

export default {
  name: "Home",
  components: {
    PageTitleComponent,
    CustomButton,
    HeaderComponent,
    SidebarComponent,
    CustomDropdown,
    FontAwesomeIcon,
    ExportExcel,
  },
  data() {
    return {
      //   vendors: {},
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
      search: "",
      sortData: {
        direction: "asc",
        type: "id",
      },
    };
  },
  methods: {
    // loadData() {
    //   axios.get("api/").then(({ data }) => (this.vendors = data));
    // },
    ...mapActions({
      fetchOpenInstruction: "thirdPartyInstruction/fetchOpenInstruction",
    }),
    searchData() {
      if (this.showSearch === false) {
        this.showSearch = true;
        this.searchClass = "fas fa-times";
      } else {
        this.showSearch = false;
        this.searchClass = "fas fa-search";
      }
    },
    sort(direction, data) {
      this.sortData.direction = direction;
      this.sortData.type = data;
      const payload = { direction, data };
      this.$store.dispatch("thirdPartyInstruction/sort", payload);
    },
    toDetail(id) {
      this.$router.push({ name: "DetailInstruction", params: { id: id } });
    },
  },

  computed: {
    ...mapGetters({
      dashboards: "thirdPartyInstruction/getOpenInstruction",
    }),
    filteredData() {
      const search = this.search.toLowerCase();
      return this.dashboards.filter((dashboard) => {
        // const id = dashboard.instruction_id.toString().toLowerCase();
        const link = dashboard.link_to.toString().toLowerCase();
        const type = dashboard.type.toString().toLowerCase();
        const vendor = dashboard.assign_vendor.toString().toLowerCase();
        const attention = dashboard.attention.toString().toLowerCase();
        const quotation = dashboard.quotation.toString().toLowerCase();
        const customerPO = dashboard.customer_po.toString().toLowerCase();
        const status = dashboard.status.toString().toLowerCase();
        return (
          //   id.includes(search) ||
          link.includes(search) ||
          type.includes(search) ||
          vendor.includes(search) ||
          attention.includes(search) ||
          quotation.includes(search) ||
          customerPO.includes(search) ||
          status.includes(search)
        );
      });
    },
  },

  created() {
    this.fetchOpenInstruction();
    // console.log(this.dashboards);
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

.pointer {
  cursor: pointer;
}

.pointer :hover {
  color: cadetblue;
}

.fa-sort-up {
  position: absolute;
}

.fa-sort-down {
  position: absolute;
}

.pointer {
  cursor: pointer;
}
.badge-completed {
  background-color: rgb(0, 176, 111);
}

.badge-progress {
  background-color: rgb(112, 114, 117);
}

.badge-canceled {
  background-color: rgb(193, 199, 206);
}
</style>
