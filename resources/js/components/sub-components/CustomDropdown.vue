<template>
    <div>
<!--        <select type="" class="btn" :class="btn_class" @click="handleClick" :style="styles">-->
<!--            <i v-if="icon_class != ''" :class="icon_class"></i>-->
<!--            <span>-->
<!--                {{label}}-->
<!--            </span>-->
<!--        </select>-->
    </div>
</template>

<script>
export default {
    name: 'CustomDropdown',
    props: {
        icon_class: {
            type: String,
            default: ''
        },
        btn_class: {
            type: String,
            default: 'btn-primary'
        },
        styles: {
            type: String,
            default: ''
        },
        label: {
            type: String,
            default: ''
        }
    },
    methods: {
        handleClick(){
            this.$emit('btnClick');
        }
    }
}
</script>

<style scoped>
span {
    font-family: Nunito,serif;
}
</style>
