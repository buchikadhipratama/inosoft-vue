<template>
    <div>
        <button type="button" class="btn" :class="btn_class" @click="handleClick" :style="styles">
            <i v-if="icon_class != ''" :class="icon_class"></i>
            <span>
                {{label}}
            </span>
        </button>
    </div>
</template>

<script>
export default {
    name: 'CustomButton',
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