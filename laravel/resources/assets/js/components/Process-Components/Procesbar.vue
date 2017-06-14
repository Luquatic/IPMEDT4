<template>
  <div class="item-delimiter bar">
    <h5>De volgende stap is : {{this.items[currentId].title}}</h5>
    <p>
      <q-progress :percentage="progress" class="stripe animate" style="height: 45px;" ></q-progress>
    </p>
  </div>

</template>

<script>

export default{
  props: ['items', 'currentId'],
  data: function () {
    return {
      progress: 0,
      completed: 0
    }
  },
  watch: {
    currentId: function (val) {
      console.log(this.items.length)
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
    font-size: 24px;
  }
</style>
