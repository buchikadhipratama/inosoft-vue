<template>
    <div class="row m-4 justify-content-center">
        <div class="col-12 p-0">
            <page-title-component :datas="data"/>
        </div>
        <div class="col-12 p-0">
            <div class="card border-0 shadow-sm d-flex" v-if="this.instructions[0]">
                <div class="card-header bg-white p-0">
                    <ul class="nav mx-3 border-0 d-flex">
                        <li class="nav-item mt-3">
                            <router-link class="nav-link text-muted" :to="{name: 'Home'}">Open</router-link>
                        </li>
                        <li class="nav-item mt-3">
                            <router-link class="nav-link text-muted" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                        </li>
                        <div class="flex-fill d-flex justify-content-end float-end py-2">
                            <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-search"/>
                            <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-file-export" label="Export"/>
                        </div>
                    </ul>
                </div>
                <div class="mt-3 mx-3 d-flex">
                <router-link class="nav-link text-muted" :to="{name: 'Home'}">
                    <i class="fas fa-angle-left"></i>
                    Back
                </router-link>
                <div class="flex-fill d-flex justify-content-end float-end py-2">
                    <router-link class="nav-link text-muted" :to="{name: 'Home'}">
                    <i class="fas fa-ban"></i>
                    Terminate
                    </router-link>
                    <router-link class="nav-link text-muted" :to="{name: 'EditInstruction', params: {id: this.$route.params.id}}">
                    <i class="fas fa-pencil-alt"></i>
                    Modify
                    </router-link>
                </div>
                </div>
                <div class="mt-2 mx-3 border">
                    <div class="grid-container">
                        <div class="grid-item item">Type</div>
                        <div class="grid-item item">SI No.</div>
                        <div class="grid-item item">Transfer No</div>
                        <div class="grid-item item">Customer</div>
                        <div class="grid-item item">Customer PO</div>
                        <div class="grid-item item">Status</div>

                        <div class="grid-item1 item1" v-if="this.instructions[0].type === 'SI'">
                            <i class="fas fa-wrench"></i>
                            Service Instruction
                            </div>
                        <div class="grid-item1 item1" v-if="this.instructions[0].type === 'LI'">
                            <i class="fas fa-truck"></i>
                            Logistics Instruction
                            </div>
                        <div class="grid-item1 item1">{{this.instructions[0].instruction_id}}</div>
                        <div class="grid-item1 item1">
                        <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-link" :label="this.instructions[0].link_to"/>
                        </div>
                        <div class="grid-item1 item1">{{this.instructions[0].customer_contract}}</div>
                        <div class="grid-item1 item1">{{this.instructions[0].customer_po}}</div>
                        <div class="grid-item1 item1">
                            <span v-if="this.instructions[0].status === 1" class="badge rounded-pill instruction-badge badge-inprogress">
                                In Progress
                            </span>
                            <span v-else-if="this.instructions[0].status === 2" class="badge rounded-pill instruction-badge badge-completed">
                                Completed
                            </span>
                            <span v-else-if="this.instructions[0].status === 0" class="badge rounded-pill instruction-badge badge-canceled">
                                Canceled
                            </span>
                        </div>

                        <div class="grid-item2 item2">Auttention Of</div>
                        <div class="grid-item2 item2">Assigned Vendor</div>
                        <div class="grid-item2 item2">Vendor Quotation No.</div>
                        <div class="grid-item2 item3">Vendor Address</div>

                        <div class="grid-item1 item4">{{this.instructions[0].attention}}</div>
                        <div class="grid-item1 item4">{{this.instructions[0].assign_vendor}}</div>
                        <div class="grid-item1 item4">{{this.instructions[0].quotation}}</div>
                        <div class="grid-item1 item5">{{this.instructions[0].vendor_address}}</div>
                    </div>
                </div>
                <div class="mt-5 mx-3 p-4">
                    <h5><b>Cost Detail</b></h5>
                    <div class="border">
                        <table class="table">
                            <thead class="table-head text-light">
                                <tr>
                                    <th>
                                        <div class="d-inline-flex align-items-center">
                                            <span>
                                                Description
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right">
                                            <span>
                                                Qty
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="d-inline-flex align-items-center">
                                            <span>
                                                UOM
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right">
                                            <span>
                                                Unit Price
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right">
                                            <span>
                                                Discount (%)
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right tab1">
                                            <span>
                                                GST/VAT (%)
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="d-inline-flex align-items-center">
                                            <span>
                                                Currency
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right">
                                            <span>
                                                GST/VAT Amount
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right">
                                            <span>
                                                Sub Total
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="align-right">
                                            <span>
                                                Total
                                            </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="d-inline-flex align-items-center">
                                            <span>
                                                Charge To
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{this.instructions[0].description}}</td>
                                    <td class="align-right">5</td>
                                    <td>{{this.instructions[0].uom}}</td>
                                    <td class="align-right">{{this.instructions[0].price}}</td>
                                    <td class="align-right">{{this.instructions[0].discount}}</td>
                                    <td class="align-right">
                                        {{this.instructions[0].gst_vat}}
                                        <i class="fas fa-arrow-right"></i>
                                    </td>
                                    <td>{{this.instructions[0].currency}}</td>
                                    <td class="align-right">{{this.instructions[0].gst_vat}}</td>
                                    <td class="align-right">475.00</td>
                                    <td class="align-right">475.00</td>
                                    <td>{{this.instructions[0].charge}}</td>
                                </tr>

                                <tr class="white-border">
                                    <td class="align-right" colspan="6">Exchange Rate <b>1 USD = 3.6725 AED</b></td>
                                    <td><b>AED</b> (Total)</td>
                                    <td class="align-right">0.00</td>
                                    <td class="align-right">1,744.44</td>
                                    <td class="align-right"><b>1,744.44</b></td>
                                    <td></td>
                                </tr>

                                <tr class="white-border">
                                    <td class="align-right" colspan="6"></td>
                                    <td><b>USD</b> (Total)</td>
                                    <td class="align-right">0.00</td>
                                    <td class="align-right">475.00</td>
                                    <td class="align-right"><b>475.00</b></td>
                                    <td></td>
                                </tr>

                                <tr class="white-border">
                                    <td class="font-20" colspan="5">Attachment</td>
                                    <td class="font-20">Notes</td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="color-used">
                                            <i class="icon-center fas fa-paperclip fa-sm"></i>
                                            {{this.instructions[0].attachment}}
                                        </span>
                                        <br>
                                        by Winata Admin on 11/jan/22 09:47 AM
                                    </td>
                                    <td>
                                        <i class="fas fa-trash fa-sm "></i>
                                    </td>
                                    <td class="white-border" colspan="3"></td>
                                    <td class="white-border">{{this.instructions[0].notes}}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <custom-button btn_class="btn btn-info h-auto fas m-3 py-2 text-light" icon_class="fas fa-plus" label="Add Attachments"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="top-p">
                        <div class="grid-container1">
                            <div class="item grid-item3">
                                <b>Vendor Invoice</b>
                            </div>
                            <div class="item grid-item4">
                                <custom-button btn_class="btn btn-info fas py-2 text-light" icon_class="fas fa-plus" label="Add Vendor Invoice"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mx-3 border">
                    <div class="header">
                        <span class="text-light">For Internal Only</span>
                    </div>
                    <div class="grid-container">
                        <div class="item grid-item5">
                            Attachments <br>
                            <custom-button btn_class="btn btn-info fas py-2 text-light" icon_class="fas fa-plus" label="Add Attachments"/>
                        </div>
                        <div class="item grid-item5 border-dot">
                            Internal Note <br>
                            <custom-button btn_class="btn btn-info fas py-2 text-light" icon_class="fas fa-plus" label="Add Internal Note"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PageTitleComponent from "../components/sub-components/PageTitleComponent";
import CustomButton from "../components/sub-components/CustomButton";
import { mapActions, mapGetters } from 'vuex';

export default {
    name: "DetailInstruction",
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
            vendors: {},
        }
    },
    methods: {
        ...mapActions({
            fetchOneInstruction: "thirdPartyInstruction/fetchOneInstruction" 
        }),
    },
    created() {
        this.fetchOneInstruction(this.$route.params.id);
    },
    computed: {
        ...mapGetters({
            instructions: "thirdPartyInstruction/getDetailInstruction"
        })
    }
}
</script>

<style scoped>
table {
  margin-bottom: 0rem;
}

.header {
  padding: 10px;
  text-align: left;
  background: #373b3e;
  color: white;
  font-size: 17px;
  font-weight: bold;
}

.fa-trash {
  color: red;
  text-align: right;
}

.top-p {
  padding-top: 10px;
}

.font-20 {
  font-size: 20px;
}

.color-used {
  color: #0baccc;
}

.icon-center {
  text-align: center;
  vertical-align: middle;
}

.white-border {
  border-bottom: white;
}

.gray-border {
  border-bottom: #dee2e6;
}

.tab1 {
  padding-right: 15px;
}

.table-head {
  background-color: rgb(193, 199, 206);
}

.nav-item .active {
  border-bottom: 4px solid rgb(0, 171, 185) !important;
}

.border {
  border: #a0aec0 1px;
}

.border-dot {
  border-left: #a0aec0 2px solid;
  border-left-style: dashed;
}

.grid-container {
  display: grid;
  grid-gap: 1px;
  margin: 20px;
}

.grid-container1 {
  display: grid;
}

.grid-item {
  text-align: left;
  padding-right: 30px;
  font-size: 12px;
}

.grid-item1 {
  text-align: left;
  padding-right: 30px;
  font-size: 15px;
  font-weight: bold;
}

.grid-item2 {
  text-align: left;
  padding-top: 20px;
  padding-right: 30px;
  font-size: 12px;
}

.grid-item3 {
  text-align: left;
  font-size: 20px;
  font-weight: bold;
}

.grid-item4 {
  text-align: right;
  font-size: 20px;
  font-weight: bold;
}

.grid-item5 {
  text-align: left;
  font-size: 15px;
  font-weight: bold;
}

.item {
  grid-row: 1;
}

.item1 {
  grid-row: 2;
}

.item2 {
  grid-row: 3;
}

.item3 {
  grid-column: 4 / span 3;
  grid-row: 3;
}

.item4 {
  grid-row: 4;
}

.item5 {
  grid-column: 4 / span 3;
  grid-row: 4;
}
</style>
