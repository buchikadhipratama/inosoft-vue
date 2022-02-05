<template>
  <div>
    <header-component />
    <div class="row ">
      <div class="col-1">
        <sidebar-component />
      </div>
      <div class="col-11 p-0">
        <page-title-component :datas="data" />

        <div class="col-12 p-0">
          <div class="card border-0 shadow-sm d-flex">
            <div class="card-header bg-white p-0">
              <div class="row">
                <div class="col-lg-11">
                  <custom-button btn_class="btn btn-white h-auto border fas m-2 py-2" icon_class="fas fa-dolly" label="Service Instruction" />
                </div>
                <div class="col-lg-1">
                  <custom-button btn_class="rounded-pill h-auto border fas m-2 py-2 px-4" label="draft" />
                </div>
              </div>
              <div class="row mx-0 my-3">
                <!-- baris kosong -->
                <div class="col-lg-2" />
                <!-- baris tengah -->
                <div class="col-lg-8" style="padding-right:20px; border-right: 1px solid #ccc;">
                  <div class="row">
                    <div class="col-3">
                      <label>Assigned Vendor</label>
                      <select class="form-control">
                        <option selected disabled>Enter Vendor</option>
                        <option value="canon">Dummy 1</option>
                        <option value="sony">Dummy 2</option>
                        <option value="nikon">Dummy 3</option>
                      </select>
                    </div>

                    <div class="col-3">
                      <label for="attention">Attention Of</label>
                      <input id="attention" class="form-control" type="text" placeholder="Enter Attention Of">
                    </div>
                    <div class="col-3">
                      <label for="quotation">Quotation Of</label>
                      <input id="quotation" class="form-control" type="text" placeholder="Enter Quotation Of">
                    </div>
                    <div class="col-3">
                      <label>Invoice To</label>
                      <select class="form-control">
                        <option selected disabled>Select an Option</option>
                        <option value="canon">Dummy 1</option>
                        <option value="sony">Dummy 2</option>
                        <option value="nikon">Dummy 3</option>
                      </select>
                    </div>

                    <div class="col-12">
                      <label>Vendor Address</label>
                      <select class="form-control">
                        <option selected disabled>Enter Vendor Address</option>
                        <option value="canon">Dummy 1</option>
                        <option value="sony">Dummy 2</option>
                        <option value="nikon">Dummy 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="col-12">
                    <label>Customer - Contract</label>
                    <select class="form-control">
                      <option selected disabled>Select Customer</option>
                      <option value="canon">Dummy 1</option>
                      <option value="sony">Dummy 2</option>
                      <option value="nikon">Dummy 3</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="po">Customer PO No.</label>
                    <input id="po" class="form-control" type="text" placeholder="Enter Customer PO">
                  </div>
                </div>

                <div class="card-body">
                  <div class="h4 bold">Cost Detail</div>
                  <table class="table">
                    <thead class="table-head text-light">
                      <tr>
                        <th>
                          <div class="d-inline-flex">
                            Description
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            QTY
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            UOM
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            Unit Price
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            Discount (%)
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            GST/VAT(%)
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            Currency
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            VAT Amount
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            Sub Total
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            Total
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex">
                            Charge To
                          </div>
                        </th>
                      </tr>
                    </thead>
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
import CustomButton from "../components/sub-components/CustomButton.vue";
import CustomDropdown from "../components/sub-components/CustomDropdown";
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue";
import HeaderComponent from "../components/sub-components/HeaderComponent.vue";
import SidebarComponent from "../components/sub-components/SidebarComponent.vue";

export default {
  name: "CreateInstruction",
  components: {
    PageTitleComponent,
    CustomButton,
    CustomDropdown,
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
  methods: {
    sortAsc() {
      console.log("sorting ascending");
    },
    sortDesc() {
      console.log("sorting descending");
    },
  },
};
</script>

<style scoped>
.bold {
  font-weight: Bold;
}
.table-head {
  background-color: rgb(193, 199, 206);
}
</style>
