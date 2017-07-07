<template>
  <div>
      <button
        class="hide-on-drawer-visible right"
        @click="$refs.drawer.open()">
        <i>menu</i>
      </button>
      <q-drawer ref="drawer" right-side>
        <div class="list platform-delimiter">
          <div class="list-header">
            Overzicht
          </div>
          <hr>
          <q-drawer-link class="gray" icon="exit_to_app" to="../logout">Logout</q-drawer-link>
        </div>
      </q-drawer>
    </div>
</template>
<script>
export default {
  data () {
    return {
    }
  }
}
</script>

<style scoped>
  .list-header{
    margin: 15px;
    color:black;
  }
  .gray{
    color: gray;
  }
</style>
