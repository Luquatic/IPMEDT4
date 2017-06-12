<template>
  <div>
    <hr class="row">
    <template v-for="items in headerItem">
      <app-proces-header :title="items.title" :content="items.content"></app-proces-header>
      <hr class="row">
    </template>
  </div>
</template>

<script>
  /* eslint-disable */
  import ProcesHeader from './ProcesHeader.vue'
  import ProcesContent from './ProcesContent.vue'


  export default{
    components: {
      'app-proces-header': ProcesHeader,
      'app-proces-content': ProcesContent
    },
    data: function(){
      return {
        headerItem: [
          {content: 0,
            title: 'Aankomst ziekenhuis'},
          {content: 1,
            title: 'EHBO'},
          {content: 2,
            title: "Foto's maken"},
          {content: 3,
            title: 'Gipsen'},
          {content: 4,
            title: 'Plannen vervolg afspraak'},
          {content: 5,
            title: 'Vervolg afspraak'}
        ]
      }
    }
  }
</script>

<style scoped>

  .row{
    border-width: 3px;
  }
</style>
