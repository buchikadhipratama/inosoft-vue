<template>
    <div>
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" v-for="(data, index) in datas" :key="index">
                <router-link class="text-muted" :to="{name: data.to}">{{data.name}}</router-link>
            </li>
        </ol>
        </nav>
    </div>
</template>

<script>
export default {
    name: "BreadCrumb",
    props: {
        datas: {
            type: Array,
            default: () => {
                return []
            }
        }
    }
}
</script>

<style scoped>
a {
    text-decoration: none;
}
</style>