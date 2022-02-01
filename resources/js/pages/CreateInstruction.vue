<template>
    <div class="row m-4 justify-content-center">
        <div class="col-12 p-0">
            <page-title-component :datas="data"/>
        </div>
        <div class="col-12 p-0">
            <div class="card border-0 shadow-sm d-flex">
                <div class="card-header bg-white p-0">
                    <div>
                        <div class="float-start">
                            <custom-button btn_class="btn btn-white h-auto border fas m-3 py-2" icon_class="fas fa-truck" label="Service Instruction"/>
                        </div>
                        <div class="float-end">
                            <custom-button btn_class="btn btn-white h-auto border fas m-3 py-2" label="draft"/>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CustomButton from '../components/sub-components/CustomButton.vue'
import PageTitleComponent from "../components/sub-components/PageTitleComponent.vue"

export default {
    name: "CreateInstruction",
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

</style>
