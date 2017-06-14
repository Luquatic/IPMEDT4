<template>
  <div class="toolbar secondary">
    <img id="logo" src="/images/logo_app_2.png" alt="">
    <q-toolbar-title :padding="2">
      Aid - Welkom {{name}}
    </q-toolbar-title>
  </div>

</template>

<script>
  export default{
    data: function () {
      return {
        name: 'PlaceHolder Naam'
      }
    }
  }

</script>

<style>
.toolbar.secondary{
  background: #6ccbf0;
}
#logo{
  width: 40px;
  height: 40px;
}
</style>
