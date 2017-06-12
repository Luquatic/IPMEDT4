<template>
  <div class="item-delimiter bar">
    <h5>De volgende stap is : {{proces}}</h5>
    <p>
      <q-progress :percentage="progress" class="stripe animate" style="height: 45px;"></q-progress>
    </p>

  </div>

</template>

<script>
export default{
  data: function () {
    return {
      progress: 20,
      proces: 'EHBO'
    }
  }
}
</script>

<style>
  .row{
    border-width: 3px;
  }

  .bar{
    padding-left:20px;
    padding-right:20px;

  }
</style>
