<template>
  <div class="toolbar secondary">
    <img id="logo" src="./logo_app_2.png" alt="">
    <q-toolbar-title :padding="2">
      Aid - Welkom {{UserName}}
    </q-toolbar-title>
    <app-drawer></app-drawer>
  </div>

</template>

<script>
    import Drawer from './Process-Components/Drawer.vue'

    function getUser(theUrl) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
        xmlHttp.send( null );
        return xmlHttp.responseText;
    }

    var naam = getUser('http://aid.jesseyfransen.com/home/user');
    console.log(naam);

    export default{
        components: {
            'app-drawer': Drawer
        },
        data () {
            return {
                UserName: naam
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
