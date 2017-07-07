<template>
  <div>
    <app-header></app-header>
    <app-proces-list></app-proces-list>
  </div>
</template>

<script>
  import Header from './Header.vue'
  import ProcesList from './Process-Components/ProcesList.vue'

  export default{
    components: {
      'app-header': Header,
      'app-proces-list': ProcesList
    }
  }
</script>

<style>
  .row{
    margin: 0 !important;
    padding:0 !important;
  }
</style>
