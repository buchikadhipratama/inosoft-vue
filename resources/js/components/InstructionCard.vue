<template>
    <div>
        <div class="card">
            <ul class="nav my-2 mx-3 border">
                <li class="nav-item">
                    <a class="nav-link text-muted active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Completed</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

export default {
    name: 'InstructionCard',
}
</script>

<style scoped>
.nav-item .active {
    border-bottom: 4px solid pink !important;
}

.nav-item :hover{
    border: none;
}

</style>