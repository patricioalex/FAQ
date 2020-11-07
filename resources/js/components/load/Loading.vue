<template>
<div v-if="showLoad">
    <div class="text-center">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        Carregando
    </div>
    <div class="modal-backdrop fade show"></div>
</div>
</template>

<script>
export default {
    created() {
        this.$root.$on('Loading', (active) => {
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
.loading {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 99999;
}
</style>
