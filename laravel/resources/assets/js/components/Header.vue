<template>
  <div class="toolbar secondary">
    <button><i>assignment_ind</i></button>
    <q-toolbar-title :padding="2">
      @if (Auth::check())
        <a class="toolbarTitle" href="#">{{ Auth::user()->voornaam }}</a>
      @endif
    </q-toolbar-title>
    <button><i>leg</i></button>
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
</style>
