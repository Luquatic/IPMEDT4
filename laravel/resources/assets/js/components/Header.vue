<template>
  <div class="toolbar secondary">
    <img id="logo" src="./logo_app_2.png" alt="">
    <q-toolbar-title :padding="2">
      Aid - Welkom {{name}}
    </q-toolbar-title>
    <app-drawer></app-drawer>
  </div>

</template>

<script>
import Drawer from '../../../../../../../../Users/Luquatic/Google Drive/HSLeiden/1617/IPMEDT4/Webapp/Kasper dit is de nieuwste/components/Process-Components/Drawer.vue'

export default{
  data: function () {
    return {
      name: 'Patient'
    }
  },
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
