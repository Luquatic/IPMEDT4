<template>
  <div>
    <app-proces-bar :items="headerItem" :currentId="currentId"></app-proces-bar>
    <hr class="row">
    <template v-for="items in headerItem">
      <app-proces-header :items="items" :currentId="currentId" ></app-proces-header>
    </template>
  </div>
</template>

<script>
  /* eslint-disable */
  import bus from '../../bus'
  import ProcesHeader from './ProcesHeader.vue'
  import ProcesContent from './ProcesContent.vue'
  import Procesbar from './Procesbar.vue'


  export default{
    components: {
      'app-proces-header': ProcesHeader,
      'app-proces-content': ProcesContent,
      'app-proces-bar': Procesbar
    },
    data: function(){
      return {
        currentId: 0,
        headerItem: [
          {content: 0,
            title: 'Aankomst ziekenhuis',
            completed: false,
            time:'9:30'},
          {content: 1,
            title: 'EHBO',
            completed: false,
            time:'11:00'},
          {content: 2,
            title: "Foto's maken",
            completed: false,
            time: '12:30'},
          {content: 3,
            title: 'Gipsen',
            completed: false,
            time:'14:30'},
          {content: 4,
            title: 'Plannen afspraak',
            completed: false,
            time:'15:30'},
          {content: 5,
            title: 'Vervolg afspraak',
            completed: false,
            time:'04-20-2018 '}
        ]
      }
    },
    created() {
      bus.$on('IncrementId', () => {
        this.currentId++
      })
    }
  }
</script>

<style scoped>
</style>
