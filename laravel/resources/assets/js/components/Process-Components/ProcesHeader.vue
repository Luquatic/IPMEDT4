<template>
  <div>
    <q-collapsible icon="local_hospital" :label="title" group="yiii">
      <div>
        <procesComponent :id="content"></procesComponent>
      </div>
    </q-collapsible>
  </div>
</template>

<script>
  import ProcesContent from './ProcesContent.vue'

  export default{
    components: {
      procesComponent: ProcesContent
    },
    props: ['content', 'title']
  }
</script>

<style>
  /*icon="local_hospital"*/
  .styling{
    height: 100px;
    width: 100px;
  }
</style>
