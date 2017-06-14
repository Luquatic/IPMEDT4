<template>
  <div>
    <div id="tijd" class="time">{{items.time}}</div>
    <q-collapsible :opened="isOpen" icon="local_hospital" :label="items.title" :html="'<h1>test</h1>'" group="yiii" :class="{voldaan: items.completed}" class="item-delimiter">
      <div>
        <procesComponent :items="items" :currentId="currentId"></procesComponent>
      </div>
    </q-collapsible>
    <hr class="row">
  </div>
</template>

<script>
  import ProcesContent from './ProcesContent.vue'

  export default{
    components: {
      procesComponent: ProcesContent
    },
    data: function () {
      return {
        opened: true
      }
    },
    props: ['items', 'currentId'],
    computed: {
      isOpen: function () {
        if (this.items.content === this.currentId) {
          console.log(this.items.content)
          return true
        }
        else {
          return false
        }
      }
    }
  }
</script>

<style scoped>
  /*icon="local_hospital"*/
  .styling{
    height: 100px;
    width: 100px;
  }
  .time{
    float: right;
    margin-right: 70px;
    margin-top: 13px;
    color: gray;
  }
  .voldaan{
    background-color: lightgray;
  }


</style>
