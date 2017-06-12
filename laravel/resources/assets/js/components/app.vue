<template>
    <!-- Don't drop "q-app" class -->
    <div id="app">
        <app-index></app-index>
    </div>
</template>

<script>
    import Index from './Index.vue'

    export default {
        components: {
            appIndex: Index
        }
    }
</script>

<style>
    *{
        font-family: 'Raleway';
    }
</style>