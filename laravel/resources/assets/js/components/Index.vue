<template>
  <div>
    <app-header></app-header>
    <app-proces-bar></app-proces-bar>
    <app-proces-list></app-proces-list>
  </div>
</template>

<script>
  import Header from 'Header.vue'
  import Procesbar from 'Process-Components/Procesbar.vue'
  import ProcesList from 'Process-Components/ProcesList.vue'

  export default{
    components: {
      'app-header': Header,
      'app-proces-list': ProcesList,
      'app-proces-bar': Procesbar
    }
  }
</script>

<style>
</style>
