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
            <page-title-component :datas="data" />
            <div class="card space-bottom" v-if="instructions[0]" v-on="setData">
              <div class="card mx-3 my-3">
                <div class="card-header bg-white p-0">
                  <div class="row">
                    <div class="col-12 row">
                      <div class="col-lg-11">
                        <div class="btn-group" role="group">
                          <div v-if="instruction === 'SI'" class="m-2 px-2 py-1 border rounded">
                            <i class="fas fa-wrench"></i>
                            Service Instruction
                          </div>
                          <div v-else-if="instruction === 'LI'" class="m-2 px-2 py-1 border rounded">
                            <i class="fas fa-truck"></i>
                            Logistics Instruction
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-1 icon-center mt-2">
                        <span class="badge text-black border rounded-pill instruction-badge" style="display: inline-block; width: 100px">
                          Draft
                        </span>
                      </div>
                    </div>
                  </div>
                  <form>
                    <div class="row mx-0 my-3">
                      <!-- baris kosong -->
                      <div class="col-lg-2" />
                      <!-- baris tengah -->
                      <div class="col-lg-8" style="padding-right:20px; border-right: 1px solid #ccc;">
                        <div class="row">
                          <div class="col-3">
                            <label>Assigned Vendor</label>
                            <select class="form-select" v-model="vendor">
                              <option selected disabled>{{ vendor }}</option>
                              <option value="Amarit & Asociates Co ltd">Amarit & Asociates Co ltd</option>
                              <option value="Amarit & Asociates Logistic Co Ltd">Amarit & Asociates Logistic Co ltd</option>
                              <option value="Alphatrans Pte Ltd">Alphatrans Pte Ltd</option>
                            </select>
                          </div>

                          <div class="col-3">
                            <label for="attention">Attention Of</label>
                            <input id="attention" v-model="attention" class="form-control" type="text" placeholder="Enter Attention Of">
                          </div>
                          <div class="col-3">
                            <label for="quotation">Quotation Of</label>
                            <input id="quotation" v-model="quotation" class="form-control" type="text" placeholder="Enter Quotation Of">
                          </div>
                          <div class="col-3">
                            <label>Invoice To</label>
                            <select class="form-select" v-model="invoice">
                              <option selected disabled>{{invoice}}</option>
                              <option value="LLS">Marubeni-Itochu Tubulars Middle East Pipes L.L.S (MITME)</option>
                              <option value="PLC">Marubeni-Itochu Tubulars Europe Plc (MITME)</option>
                            </select>
                          </div>

                          <div class="col-12">
                            <label>Vendor Address</label>
                            <select class="form-select" v-model="address">
                              <option selected disabled>{{address}}</option>
                              <option value="address">Sesetan, Denpasar, Bali, Indonesia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="col-12">
                          <label>Customer - Contract</label>
                          <select class="form-select" v-model="contract">
                            <option selected disabled>{{contract}}</option>
                            <option value="Hail & Ghasha">Hail & Ghasha</option>
                            <option value="OFFSHORE">OFFSHORE</option>
                            <option value="ONSHORE">ONSHORE</option>
                            <option value="Sour Gas">Sour Gas</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <label for="po">Customer PO No.</label>
                          <input id="po" class="form-control" v-model="poNo" type="text" placeholder="Enter Customer PO">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-body bg-white p-0">
                  <div class="h4 bold mx-3 pt-3">Cost Detail</div>
                  <table class="table my-0">
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
                        <th width="8%">
                          <div class="d-inline-flex">
                            UOM
                          </div>
                        </th>
                        <th width="12%">
                          <div class="d-inline-flex">
                            Unit Price
                          </div>
                        </th>
                        <th width="8%">
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
                          <div class="d-inline-flex"></div>
                        </th>
                        <th width="10%">
                          <div class="d-inline-flex">
                            Currency
                          </div>
                        </th>
                        <th width="8%" class="text-right">
                          <div class="d-inline-flex">
                            VAT Amount
                          </div>
                        </th>
                        <th width="8%" class="text-right">
                          <div class="d-inline-flex">
                            Sub Total
                          </div>
                        </th>
                        <th width="8%" class="text-right">
                          <div class="d-inline-flex">
                            Total
                          </div>
                        </th>
                        <th width="14%">
                          <div class="d-inline-flex">
                            Charge To
                          </div>
                        </th>
                        <th>
                          <div class="d-inline-flex"></div>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input id="desc" class="form-control" type="text" placeholder="Enter Description" v-model="description"></td>
                        <td><input id="qty" class="form-control" type="number" v-model="qty" placeholder="Enter"></td>
                        <td><select class="form-select">
                            <option selected>SHP</option>
                          </select></td>
                        <td><input id="unitPrice" class="form-control" type="text" v-model="unitPrice" placeholder="Enter Unit Price"></td>
                        <td><input id="discount" class="form-control" type="number" v-model="discount" placeholder="0"></td>
                        <td><input id="gst" class="form-control" type="number" v-model="GST" placeholder="0"></td>
                        <td class="icon-center"><i class="fas fa-arrow-right"></i></td>
                        <td><select class="form-select" id="currency" v-model="currency">
                            <option selected disabled></option>
                            <option value="AED">AED</option>
                            <option value="USD">USD</option>
                          </select></td>
                        <td class="text-right text-middle">{{getVAT}}</td>
                        <td class="text-right text-middle">{{getSubTotal}}</td>
                        <td class="text-right text-middle">{{getTotal}}</td>
                        <td><select class="form-select" v-model="charge">
                            <option selected disabled>{{charge}}</option>
                            <option value="MITME">MITME</option>
                            <option value="Customer">Customer</option>
                          </select></td>
                        <td>
                          <custom-button btn_class="btn btn-secondary h-auto" icon_class="fas fa-minus" />
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <tr class="white-border">
                    <td class="align-right" colspan="7" rowspan="2">Exchange Rate <b>1 USD = 3.6725 AED</b></td>
                    <td><b>AED</b> (Total)</td>
                    <td class="text-right">
                      <p class="text-right" v-if="currency==='AED'">{{getVAT}}</p>
                      <p class="text-right" v-else-if="currency==='USD'">{{currencyVAT}}</p>
                      <p class="text-right" v-else>0.00</p>
                    </td>
                    <td>
                      <p class="text-right" v-if="currency==='AED'">{{getTotal}}</p>
                      <p class="text-right" v-else-if="currency==='USD'">{{currencyResult}}</p>
                      <p class="text-right" v-else>0.00</p>
                    </td>
                    <td>
                      <p class="text-right" v-if="currency==='AED'">{{getTotal}}</p>
                      <p class="text-right" v-else-if="currency==='USD'">{{currencyResult}}</p>
                      <p class="text-right" v-else>0.00</p>
                    </td>
                    <td rowspan="2"></td>
                    <td rowspan="2" class="icon-center">
                      <custom-button btn_class="btn btn-info h-auto" icon_class="fas fa-plus" />
                    </td>
                  </tr>

                  <div class="col-3">
                    <label for="attention">Attention Of</label>
                    <input id="attention" v-model="attention" class="form-control" type="text" placeholder="Enter Attention Of">
                  </div>
                  <div class="col-3">
                    <label for="quotation">Quotation Of</label>
                    <input id="quotation" v-model="quotation" class="form-control" type="text" placeholder="Enter Quotation Of">
                  </div>
                  <div class="col-3">
                    <label>Invoice To</label>
                    <select class="form-select" v-model="invoice">
                      <option selected disabled>Select an Option</option>
                      <option value="LLS">Marubeni-Itochu Tubulars Middle East Pipes L.L.S (MITME)</option>
                      <option value="PLC">Marubeni-Itochu Tubulars Europe Plc (MITME)</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label>Vendor Address</label>
                    <select class="form-select" v-model="address">
                      <option selected disabled>Enter Vendor Address</option>
                      <option value="address">Sesetan, Denpasar, Bali, Indonesia</option>
                    </select>
                  </div>
                </div>

                <div class="card space-bottom">
                  <div class="row mx-0 my-3">
                    <div class="h6">Link To</div>
                    <div class="col-lg-6">
                      <select class="form-select" v-model="linked">
                        <option selected>{{linked}}</option>
                        <option value="0001">INSP-2020-0001</option>
                        <option value="0002">INSP-2020-0002</option>
                        <option value="0003">INSP-2020-0003</option>
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <p v-if="linked==='Select Item'"></p>
                      <p v-else>
                        <custom-button btn_class="btn btn-danger text-light fas py-2" label="Remove Link" />
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card space-bottom">
                  <div class="row mx-0 my-3">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <custom-button class="icon-center" btn_class="btn fas py-2" label="Cancel" />
                      <custom-button class="icon-center" btn_class="btn border fas py-2" label="Save As Draft" />
                      <router-link :to="{name: 'DetailInstruction'}" class="dropdown">
                        <button btn_type="submit" v-on:click="updateData" class="icon-center" btn_class="btn btn-info text-light fas py-2" label="Submit" />
                      </router-link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body bg-white p-0">
            <div class="h4 bold mx-3 pt-3">Cost Detail</div>
            <table class="table my-0">
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
                  <th width="8%">
                    <div class="d-inline-flex">
                      UOM
                    </div>
                  </th>
                  <th width="12%">
                    <div class="d-inline-flex">
                      Unit Price
                    </div>
                  </th>
                  <th width="8%">
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
                    <div class="d-inline-flex"></div>
                  </th>
                  <th width="10%">
                    <div class="d-inline-flex">
                      Currency
                    </div>
                  </th>
                  <th width="8%" class="text-right">
                    <div class="d-inline-flex">
                      VAT Amount
                    </div>
                  </th>
                  <th width="8%" class="text-right">
                    <div class="d-inline-flex">
                      Sub Total
                    </div>
                  </th>
                  <th width="8%" class="text-right">
                    <div class="d-inline-flex">
                      Total
                    </div>
                  </th>
                  <th width="14%">
                    <div class="d-inline-flex">
                      Charge To
                    </div>
                  </th>
                  <th>
                    <div class="d-inline-flex"></div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input id="desc" class="form-control" type="text" placeholder="Enter Description"></td>
                  <td><input id="qty" class="form-control" type="number" v-model="qty" placeholder="Enter"></td>
                  <td><select class="form-select">
                      <option selected>SHP</option>
                    </select></td>
                  <td><input id="unitPrice" class="form-control" type="text" v-model="unitPrice" placeholder="Enter Unit Price"></td>
                  <td><input id="discount" class="form-control" type="number" v-model="discount" placeholder="0"></td>
                  <td><input id="gst" class="form-control" type="number" v-model="GST" placeholder="0"></td>
                  <td class="icon-center"><i class="fas fa-arrow-right"></i></td>
                  <td><select class="form-select" id="currency" v-model="currency">
                      <option selected disabled></option>
                      <option value="AED">AED</option>
                      <option value="USD">USD</option>
                    </select></td>
                  <td class="text-right text-middle">{{getVAT}}</td>
                  <td class="text-right text-middle">{{getSubTotal}}</td>
                  <td class="text-right text-middle">{{getTotal}}</td>
                  <td><select class="form-select">
                      <option selected disabled>Select an Option</option>
                      <option value="MITME">MITME</option>
                      <option value="Customer">Customer</option>
                    </select></td>
                  <td>
                    <custom-button btn_class="btn btn-secondary h-auto" icon_class="fas fa-minus" />
                  </td>
                </tr>

                <tr class="white-border">
                  <td class="align-right" colspan="7" rowspan="2">Exchange Rate <b>1 USD = 3.6725 AED</b></td>
                  <td><b>AED</b> (Total)</td>
                  <td class="text-right">
                    <p class="text-right" v-if="currency==='AED'">{{getVAT}}</p>
                    <p class="text-right" v-else-if="currency==='USD'">{{currencyVAT}}</p>
                    <p class="text-right" v-else>0.00</p>
                  </td>
                  <td>
                    <p class="text-right" v-if="currency==='AED'">{{getTotal}}</p>
                    <p class="text-right" v-else-if="currency==='USD'">{{currencyResult}}</p>
                    <p class="text-right" v-else>0.00</p>
                  </td>
                  <td>
                    <p class="text-right" v-if="currency==='AED'">{{getTotal}}</p>
                    <p class="text-right" v-else-if="currency==='USD'">{{currencyResult}}</p>
                    <p class="text-right" v-else>0.00</p>
                  </td>
                  <td rowspan="2"></td>
                  <td rowspan="2" class="icon-center">
                    <custom-button btn_class="btn btn-info h-auto" icon_class="fas fa-plus" />
                  </td>
                </tr>

                <tr class="white-border">
                  <td><b>USD</b> (Total)</td>
                  <td class="text-right">
                    <p class="text-right" v-if="currency==='USD'">{{getVAT}}</p>
                    <p class="text-right" v-else-if="currency==='AED'">{{currencyVAT}}</p>
                    <p class="text-right" v-else>0.00</p>
                  </td>
                  <td>
                    <p class="text-right" v-if="currency==='USD'">{{getTotal}}</p>
                    <p class="text-right" v-else-if="currency==='AED'">{{currencyResult}}</p>
                    <p class="text-right" v-else>0.00</p>
                  </td>
                  <td>
                    <p class="text-right" v-if="currency==='USD'">{{getTotal}}</p>
                    <p class="text-right" v-else-if="currency==='AED'">{{currencyResult}}</p>
                    <p class="text-right" v-else>0.00</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row mx-0 space-bottom">
          <div class="col-4">
            <div class="h4">Attachment</div>
            <div v-for="(file, index) in files" :key="index" class="card mb-3">
              <div class="row icon-center">
                <div class="col-2">
                  <div class="text-info">
                    <div class="fas fa-paperclip" />
                  </div>
                </div>
                <div class="col-8">
                  <div class="text-info h5 mb-0 text-left">{{file.name}}</div>
                  <div class="text-black pt-0 text-left">by Admin on {{currentDateTime()}}</div>
                </div>
                <div class="col-2">
                  <button @click="deleteFile(index)" class="text-danger btn fas fa-trash" />
                </div>
              </div>
            </div>
            <label class="btn btn-info text-light">
              <i class="fa fa-plus"></i> Add Attachment
              <input type="file" name="files[]" @change="onFileChange" multiple style="display: none;">
            </label>

            <!--                  <custom-button btn_class="btn btn-info text-light fas py-2" icon_class="fas fa-plus" label="Add Attachments"/>-->
            <!--                  <input class="btn btn-info text-light fas py-2" type="file" @change="onFileSelected">-->
          </div>
          <div class="col-1" />
          <div class="col-7">
            <div class="h4">Notes</div>
            <textarea id="notes" v-model="notes" class="form-control"></textarea>
          </div>
        </div>
      </div>

      <div class="card space-bottom">
        <div class="row mx-0 my-3">
          <div class="h6">Link To</div>
          <div class="col-lg-6">
            <select class="form-select" v-model="linked">
              <option selected>Select Item</option>
              <option value="0001">INSP-2020-0001</option>
              <option value="0002">INSP-2020-0002</option>
              <option value="0003">INSP-2020-0003</option>
            </select>
          </div>
          <div class="col-lg-6">
            <p v-if="linked==='Select Item'"></p>
            <p v-else>
              <custom-button btn_class="btn btn-danger text-light fas py-2" label="Remove Link" />
            </p>
          </div>
        </div>
      </div>
      <div class="card space-bottom">
        <div class="row mx-0 my-3">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <custom-button class="icon-center" btn_class="btn fas py-2" label="Cancel" />
            <custom-button class="icon-center" btn_class="btn border fas py-2" label="Save As Draft" />
            <router-link :to="{name: 'DetailInstruction'}" class="dropdown">
              <custom-button class="icon-center" btn_class="btn btn-info text-light fas py-2" label="Submit" />
            </router-link>
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
import { mapActions, mapGetters } from "vuex";

export default {
  name: "EditInstruction",
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
      instruction: "",
      vendor: "",
      attention: "",
      quotation: "",
      invoice: "Select an Option",
      address: "Enter Vendor Address",
      contract: "Select Customer",
      poNo: "",
      description: "",

      qty: 0,
      unitPrice: "",
      discount: 0,
      currency: "",
      amount: 0,
      rate: "",
      charge: "",
      files: [],
      notes: "",
      linked: "Select Item",
      GST: 0,
    };
  },
  methods: {
    onFileSelected(event) {
      console.log(event);
    },
    onFileChange(e) {
      this.files = e.target.files;
      console.log(this.files);
    },
    currentDateTime() {
      const current = new Date();
      const date =
        current.getDate() +
        "/" +
        (current.getMonth() + 1) +
        "/" +
        current.getFullYear();
      const time = current.getHours() + ":" + current.getMinutes();
      if (current.getHours() >= 12) {
        return date + " " + time + " PM";
      } else {
        return date + " " + time + " AM";
      }
    },
    deleteFile(index) {
      this.files = Array.prototype.slice.call(this.files);
      this.files.splice(index, 1);
    },
    deleteDetail(index) {
      this.details = Array.prototype.slice.call(this.details);
      this.details.splice(index, 1);
    },
    ...mapActions({
      fetchOneInstruction: "thirdPartyInstruction/fetchOneInstruction",
    }),
    updateData() {
      let updateVendor = {
        id: this.id,
        assign_vendor: this.vendor,
        attention: this.attention,
        quotation: this.quotation,
        invoice: this.invoice,
        customer_contract: this.contract,
        vendor_address: this.address,
        customer_po: this.poNo,
        description: this.description,
        qty: this.qty,
        uom: this.uom,
        unit_price: this.unitPrice,
        discount: this.discount,
        gst_vat: this.gst,
        currency: this.currency,
        charge: this.charge,
        notes: this.notes,
        link_to: this.linked,
        type: this.instruction,
      };
      axios.put("api/update", updateVendor).then((response) => {
        console.log(response);
      });
    },
  },
  computed: {
    getTotal() {
      const discount = (this.qty * this.unitPrice * this.discount) / 100;
      const gst = ((this.qty * this.unitPrice - discount) * this.GST) / 100;
      return (this.qty * this.unitPrice - discount + gst).toFixed(2);
    },
    getSubTotal() {
      const discount = (this.qty * this.unitPrice * this.discount) / 100;
      return (this.qty * this.unitPrice - discount).toFixed(2);
    },
    getVAT() {
      const discount = (this.qty * this.unitPrice * this.discount) / 100;
      return (
        ((this.qty * this.unitPrice - discount) * this.GST) /
        100
      ).toFixed(2);
    },
    currencyResult() {
      return (this.getTotal * 3.6725).toFixed(2);
    },
    currencyVAT() {
      return (this.getVAT * 3.6725).toFixed(2);
    },
    ...mapGetters({
      instructions: "thirdPartyInstruction/getDetailInstruction",
    }),
    setData() {
      this.id = this.instructions[0]._id;
      this.instruction = this.instructions[0].type;
      this.vendor = this.instructions[0].assign_vendor;
      this.attention = this.instructions[0].attention;
      this.quotation = this.instructions[0].quotation;
      this.invoice = this.instructions[0].invoice;
      this.address = this.instructions[0].vendor_address;
      this.contract = this.instructions[0].customer_contract;
      this.poNo = this.instructions[0].customer_po;
      this.qty = this.instructions[0].qty;
      this.unitPrice = this.instructions[0].unit_price;
      this.discount = this.instructions[0].discount;
      this.currency = this.instructions[0].currency;
      this.description = this.instructions[0].description;
      this.charge = this.instructions[0].charge;
      this.notes = this.instructions[0].notes;
      this.linked = this.instructions[0].link_to;
      this.GST = this.instructions[0].gst_vat;
    },
  },
  created() {
    this.fetchOneInstruction(this.$route.params.id);
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
tbody {
  border-top: none !important;
}

.icon-center {
  text-align: center;
  vertical-align: middle;
  justify-content: center;
  align-items: center;
}
.text-right {
  text-align: right;
}
.text-left {
  text-align: left;
}
.text-middle {
  vertical-align: middle;
}
.space-bottom {
  margin-bottom: 1%;
}
</style>
