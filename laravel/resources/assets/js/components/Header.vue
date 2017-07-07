<template>
  <div class="toolbar secondary">
    <img id="logo" src="./logo_app_2.png" alt="">
    <q-toolbar-title :padding="2">
      Aid - Welkom {{user}}
    </q-toolbar-title>
    <app-drawer></app-drawer>
  </div>

</template>

<script>
    import Drawer from './Process-Components/Drawer.vue'

    export default{
        components: {
            'app-drawer': Drawer
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
