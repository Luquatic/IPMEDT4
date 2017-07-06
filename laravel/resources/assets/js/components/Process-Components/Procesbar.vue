<template>
  <div class="item-delimiter bar">
    <h5><strong>De volgende stap is : {{this.items[currentId].title}}</strong></h5>
      <div>
        <div class="percentage"><strong>{{this.progress}} %</strong></div>
        <q-progress :percentage="progress" class="stripe animate" style="height: 25px;"></q-progress>
      </div>
  </div>

</template>

<script>

export default{
  props: ['items', 'currentId'],
  data: function () {
    return {
      progress: 0,
      completed: 0,
      test: 'Hallo'
    }
  },
  watch: {
    currentId: function (val) {
      this.progress += (100 / (this.items.length - 1))
    }
  }
}
</script>

<style scoped>
  .bar{
    padding-left:20px;
    padding-right:20px;
  }
  h5{
    font-size: 16px;
  }
  .percentage{
    padding: 3px;
    margin-left: 6px;
    color: white;
    z-index: 2;
    position: absolute;
  }
</style>
