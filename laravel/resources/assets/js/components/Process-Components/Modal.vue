<template>
  <div class="right">
      <button class="secondary"
      v-for="modal in types"
      @click="$refs[modal.ref].open()">Plattegrond</button>
    <q-modal ref="minimizedModal" class="minimized" :content-css="{padding: '20px'}">
        <h5>Plattegrond van het ziekenhuis</h5>
          <slot></slot>
        <button class="full-width back_button" @click="$refs.minimizedModal.close()">Terug</button>
    </q-modal>
  </div>
</template>
<script>
export default {
  data () {
    return {
      types: [
        {
          label: 'Always Minimized',
          ref: 'minimizedModal'
        }
      ],
      position: 'bottom'
    }
  }
}
</script>

<style scoped>
  button.secondary {
    background-color: #6ccbf0;
  }
  .back_button{
    background-color: #6ccbf0;
    float: right;
  }
  .right{
    float: right;
    margin: 10px;
  }
</style>
