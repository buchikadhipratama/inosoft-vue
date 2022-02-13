<template>
  <div>
    <header-component />
    <div class="row ">
      <div class="col">
        <sidebar-component />
      </div>
      <div class="col-11 p-0">
        <page-title-component :datas="data" />

        <div class="card space-bottom">
            <div class="card mx-3 my-3">
                <div class="card-header bg-white p-0">
                    <div class="row">
                        <div class="col-lg-11">
                            <custom-button btn_class="btn btn-white h-auto border fas m-2 py-2" icon_class="fas fa-dolly" label="Service Instruction" />
                        </div>
                        <div class="col-lg-1">
                            <custom-button btn_class="rounded-pill h-auto border fas m-2 py-2 px-4" label="draft" />
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
                                        <select class="form-select">
                                            <option selected disabled>Enter Vendor</option>
                                            <option value="Co Ltd">Amarit & Asociates Co ltd</option>
                                            <option value="Logistic">Amarit & Asociates Logistic Co ltd</option>
                                            <option value="Alphatrans">Alphatrans Pte Ltd</option>
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
                                        <select class="form-select">
                                            <option selected disabled>Select an Option</option>
                                            <option value="LLS">Marubeni-Itochu Tubulars Middle East Pipes L.L.S (MITME)</option>
                                            <option value="PLC">Marubeni-Itochu Tubulars Europe Plc (MITME)</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label>Vendor Address</label>
                                        <select class="form-select">
                                            <option selected disabled>Enter Vendor Address</option>
                                            <option value="address">Sesetan, Denpasar, Bali, Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="col-12">
                                    <label>Customer - Contract</label>
                                    <select class="form-select">
                                        <option selected disabled>Select Customer</option>
                                        <option value="Hail & Ghasha">Hail & Ghasha</option>
                                        <option value="OFFSHORE">OFFSHORE</option>
                                        <option value="ONSHORE">ONSHORE</option>
                                        <option value="Sour Gas">Sour Gas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="po">Customer PO No.</label>
                                    <input id="po" class="form-control" type="text" placeholder="Enter Customer PO">
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
                                <th width="11%">
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
                                <th><div class="d-inline-flex"></div></th>
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
                                <th><div class="d-inline-flex"></div></th>
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
                                <td><select class="form-select" id="currency" v-model="currency" >
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
                                <td><custom-button btn_class="btn btn-secondary h-auto" icon_class="fas fa-minus"/></td>
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
                                <td rowspan="2" class="icon-center"><custom-button btn_class="btn btn-info h-auto" icon_class="fas fa-plus"/></td>
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
              <div class="col-5">
                  <div class="h4">Attachment</div>
                  <p v-if="attachment"></p>
                  <label class="btn btn-info text-light">
                      <i class="fa fa-plus"></i> Add Attachment
                      <input type="file" style="display: none;">
                  </label>
<!--                  <custom-button btn_class="btn btn-info text-light fas py-2" icon_class="fas fa-plus" label="Add Attachments"/>-->
<!--                  <input class="btn btn-info text-light fas py-2" type="file" @change="onFileSelected">-->
              </div>
              <div class="col-7">
                  <div class="h4">Notes</div>
                  <textarea id="notes" class="form-control" ></textarea>
              </div>
          </div>
        </div>

        <div class="card space-bottom">
            <div class="row mx-0 my-3">
                <div class="h6">Link To</div>
                <div class="col-lg-6">
                    <select class="form-select" v-model="linked">
                        <option selected disabled>Select Item</option>
                        <option value="0001">INSP-2020-0001</option>
                        <option value="0002">INSP-2020-0002</option>
                        <option value="0003">INSP-2020-0003</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <p v-if="linked==='0001'">
                        <custom-button btn_class="btn btn-danger text-light fas py-2" label="Remove Link" v-model="removeLink"/>
                    </p>
                    <p v-else-if="linked==='Select Item'"></p>
                    <p v-else>
                        <custom-button btn_class="btn btn-danger text-light fas py-2" label="Remove Link" v-model="removeLink"/>
                    </p>
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
            qty: 0,
            unitPrice: 0,
            discount: 0,
            currency: "",
            amount: 0,
            rate: "",
            attachment: "",
            linked: "Select Item",
            removeLink: "",
            GST: 0,
        };
    },
    methods: {
        onFileSelected(event){
            console.log(event)
        }
    },
    computed:{
        getTotal(){
            const discount = ((this.qty * (this.unitPrice))*this.discount/100)
            const gst = ((((this.qty * (this.unitPrice)) - discount)*this.GST)/100)
            return (((this.qty * (this.unitPrice)) - discount)+gst).toFixed(2)
        },
        getSubTotal(){
            const discount = ((this.qty * (this.unitPrice))*this.discount/100)
            return ((this.qty * (this.unitPrice)) - discount).toFixed(2)
        },
        getVAT(){
            const discount = ((this.qty * (this.unitPrice))*this.discount/100)
            return ((((this.qty * (this.unitPrice)) - discount)*this.GST)/100).toFixed(2)
        },
        currencyResult() {
            // fetch(
            //     `https://v6.exchangerate-api.com/v6/${"9809b1cec3fb53ce2b3f3f6a"}/latest/${this.currency}`
            // )
            //     .then((res) => res.json())
            //     .then((data) => {
            //         this.data = data;
            //         this.rate = data.conversion_rates[this.currency];
            //     });
            return (this.getTotal * 3.6725).toFixed(2);

        },
        currencyVAT(){
            return (this.getVAT * 3.6725).toFixed(2);
        }
    }
    // computation(){
    //     var qty = document.getElementById(qty).value;
    //     var unitPrice = document.getElementById(unitPrice).value;
    //     var discount = document.getElementById(discount).value;
    //     discount = ((qty * (unitPrice * 0.1))*discount/100);
    //     var total = ((qty * (unitPrice * 0.1)) - discount).toFixed(2);
    //     total =total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    //     document.getElementById('total').innerHTML = total;
    // }
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

.icon-center{
    text-align: center;
    vertical-align: middle;
}
.text-right{
    text-align: right;
}

.text-middle{
    vertical-align: middle;
}
.space-bottom{
    margin-bottom: 1%;
}
</style>
