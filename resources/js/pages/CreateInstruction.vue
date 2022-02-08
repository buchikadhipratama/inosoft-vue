<template>
  <div>
    <header-component />
    <div class="row ">
      <div class="col">
        <sidebar-component />
      </div>
      <div class="col-11 p-0">
        <page-title-component :datas="data" />

        <div class="col-12 p-0">
            <div class="card space-bottom">
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
                  </div>
              </div>
              <div class="card-body">
                  <div class="h4 bold">Cost Detail</div>
                  <table class="table">
                      <thead class="table-head text-light">
                      <tr>
                          <th width="12%">
                              <div class="d-inline-flex">
                                  Description
                              </div>
                          </th>
                          <th width="7%">
                              <div class="d-inline-flex">
                                  QTY
                              </div>
                          </th>
                          <th width="6%">
                              <div class="d-inline-flex">
                                  UOM
                              </div>
                          </th>
                          <th width="11%">
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
                          <th><div class="d-inline-flex"></div></th>
                          <th width="10%">
                              <div class="d-inline-flex">
                                  Currency
                              </div>
                          </th>
                          <th width="10%">
                              <div class="d-inline-flex">
                                  VAT Amount
                              </div>
                          </th>
                          <th width="10%">
                              <div class="d-inline-flex">
                                  Sub Total
                              </div>
                          </th>
                          <th>
                              <div class="d-inline-flex">
                                  Total
                              </div>
                          </th>
                          <th width="12%">
                              <div class="d-inline-flex">
                                  Charge To
                              </div>
                          </th>
                          <th><div class="d-inline-flex"></div></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td><input id="desc" class="form-control" type="text" placeholder="Enter Description"></td>
                          <td><input id="qty" class="form-control" type="text" placeholder="Enter"></td>
                          <td><select class="form-control">
                              <option selected>SHP</option>
                              <option value="canon">Dummy 1</option>
                              <option value="sony">Dummy 2</option>
                              <option value="nikon">Dummy 3</option>
                          </select></td>
                          <td><input id="unitPrice" class="form-control" type="text" placeholder="Enter Unit Price"></td>
                          <td><input id="disc" class="form-control" type="text" placeholder="0"></td>
                          <td><input id="gst" class="form-control" type="text" placeholder="0"></td>
                          <td class="icon-center"><i class="fas fa-arrow-right"></i></td>
                          <td><select class="form-control">
                              <option selected disabled></option>
                              <option value="canon">Dummy 1</option>
                              <option value="sony">Dummy 2</option>
                              <option value="nikon">Dummy 3</option>
                          </select></td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td><select class="form-control">
                              <option selected disabled>Select an Option</option>
                              <option value="canon">Dummy 1</option>
                              <option value="sony">Dummy 2</option>
                              <option value="nikon">Dummy 3</option>
                          </select></td>
                          <td><custom-button btn_class="btn btn-secondary h-auto" icon_class="fas fa-minus"/></td>
                      </tr>

                      <tr class="white-border">
                          <td class="align-right" colspan="7" rowspan="2">Exchange Rate <b>1 USD = 3.6725 AED</b></td>
                          <td><b>AED</b> (Total)</td>
                          <td class="align-right">0.00</td>
                          <td class="align-right">0.00</td>
                          <td class="align-right"><b>0.00</b></td>
                          <td rowspan="2"></td>
                          <td rowspan="2" class="icon-center"><custom-button btn_class="btn btn-info h-auto" icon_class="fas fa-plus"/></td>
                      </tr>

                      <tr class="white-border">
                          <td><b>USD</b> (Total)</td>
                          <td class="align-right">0.00</td>
                          <td class="align-right">475.00</td>
                          <td class="align-right"><b>475.00</b></td>
                          <td></td>
                      </tr>
                      </tbody>
                  </table>
              </div>
              <div class="row mx-0 space-bottom">
                  <div class="col-6">
                      <div class="h4">Attachment</div>
                      <custom-button btn_class="btn btn-info text-light fas py-2" icon_class="fas fa-plus" label="Add Attachments"/>
                  </div>
                  <div class="col-6">
                      <div class="h4">Notes</div>
                      <textarea id="notes" class="form-control" ></textarea>
                  </div>
              </div>
            </div>

            <div class="card space-bottom">
                <div class="row mx-0 my-3 -align-right">
                    <div class="col-6">
                        <div class="h6">Link To</div>
                            <select class="form-control">
                              <option selected disabled>Select Item</option>
                              <option value="canon">Dummy 1</option>
                              <option value="sony">Dummy 2</option>
                              <option value="nikon">Dummy 3</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="card space-bottom">
                <div class="row mx-0 my-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <custom-button class="icon-center" btn_class="btn fas py-2" label="Cancel"/>
                        <custom-button class="icon-center" btn_class="btn border fas py-2" label="Save As Draft"/>
                        <custom-button class="icon-center" btn_class="btn btn-info text-light fas py-2" label="Submit"/>
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

.icon-center{
    text-align: center;
    vertical-align: middle;
}
.space-bottom{
    margin-bottom: 1%;
}
</style>
