<template>
    <div>
        <table class="table" :class="table_class">
            <thead :class="thead_class">
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
</template>

<script>
export default {
    name: "InstructionTable",
    props: {
        table_class: {
            type: String,
            default: ''
        },
        thead_class: {
            type: String,
            default: ''
        },
        instructions: {
            type: Array,
            default: () => {
                return []
            }
        }
    }
}
</script>
