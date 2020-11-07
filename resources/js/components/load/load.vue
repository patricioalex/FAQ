<template>
<div class="container" v-if="showLoad">
    <div class="load text-center">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        Carregando
    </div>

</div>
</template>

<script>
export default {
    created() {
        this.$root.$on('load', (active) => {
            this.showLoad = active
        })
    },

    data() {
        return {
            showLoad: false
        }
    }
}
</script>

<style>
.load {
    position: relative;
    padding-top: 50px;
    padding-bottom: 50px;
    z-index: 1040;
}
</style>
