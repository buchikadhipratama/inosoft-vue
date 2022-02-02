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
                            <router-link class="nav-link text-muted" :to="{name: 'CompletedInstruction'}">Completed</router-link>
                        </li>
                        <li class="nav-item mt-3">
                            <router-link class="nav-link text-muted active" :to="{name: 'DetailInstruction'}">Detail</router-link>
                        </li>
                        <div class="flex-fill d-flex justify-content-end float-end py-2">
                            <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-search"/>
                            <custom-button btn_class="btn btn-light h-auto fas m-1 border py-2" icon_class="fas fa-file-export" label="Export"/>
                        </div>
                    </ul>
                </div>
                <div class="mt-5 mx-3" style="border: #a0aec0 1px solid">
                    <div>
                        <table class="table">
                            <tr>
                                <td>Type</td>
                                <td>SI No.</td>
                                <td>Transfer No</td>
                                <td>Customer</td>
                                <td>Customer PO</td>
                                <td>Status</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>SI No.</td>
                                <td>Transfer No</td>
                                <td>Customer</td>
                                <td>Customer PO</td>
                                <td>Status</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="mt-5 mx-3">
                    <h5>Cost Detail</h5>
                    <table class="table">
                        <thead class="table-head text-light">
                        <tr>
                            <th>
                                Description
                            </th>
                            <th>
                                Qty
                            </th>
                            <th>
                                UOM
                            </th>
                            <th>
                                Unit Price
                            </th>
                            <th>
                                Discount (%)
                            </th>
                            <th>
                                GST/VAT (%)
                            </th>
                            <th>
                                Currency
                            </th>
                            <th>
                               GST/VAT Amount
                            </th>
                            <th>
                                Sub Total
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                                Charge To
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                            <td>a</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import PageTitleComponent from "../components/sub-components/PageTitleComponent";
import CustomButton from "../components/sub-components/CustomButton";

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

.fa-sort-up {
    position: absolute;
}

.fa-sort-down {
    position: absolute;
}
</style>
