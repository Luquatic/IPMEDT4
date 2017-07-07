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
                <button class="full-width gray" @click="logout">Logout</button>
            </div>
        </q-drawer>
    </div>
</template>
<script>
    export default {
        data () {
            return {
            }
        },
        methods: {
            logout: function (event) {
                location.href = 'logout'
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