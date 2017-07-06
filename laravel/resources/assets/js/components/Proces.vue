<template>
  <div>
    <hr class="row">

    <!-- Item 1 : Aankomst-->
    <q-collapsible icon="local_hospital" label="Aankomst ziekenhuis" class="voldaan">
      <img src="../../../../../../../../Users/Luquatic/Google%20Drive/HSLeiden/1617/IPMEDT4/Webapp/Kasper%20dit%20is%20de%20nieuwste/assets/lumc.jpg" class="responsive">
      <hr>
      <div>
        Welkom bij het LUMC!
        U heeft zich net aangemeld bij de balie en heeft uw gegevens ontvangen.
        Deze app begeleid u door het proces van vandaag.
        Bekijk de volgende processen die u gaat doorlopen en ondervind meer
        informatie hierover.
      </div>
    </q-collapsible>
    <hr class="row">

    <!-- Item 2 : EHBO -->
    <q-collapsible icon="local_hospital" label="EHBO">
      <div>
        Bij de EHBO wordt er onderzocht wat er aan de hand is met uw been.
        Als het duidelijk is dat er wat aan de hand is moeten
        er foto's gemaakt worden.
      </div>
      <hr>
      <!-- feedback knop -->
      <button @click="dialog" class="primary small">
        Hoe was het bezoek bij de EHBO?
      </button>
    </q-collapsible>
    <hr class="row">

    <!-- Item 3: foto's maken-->
    <q-collapsible icon="local_hospital" label="Foto's maken">
      Je been kan op verschillende manieren gebroken zijn.
      Tijdens het maken van de foto word er duidelijk wat
      voor soort breuk je hebt.
      <hr>
      <img src="../../../../../../../../Users/Luquatic/Google%20Drive/HSLeiden/1617/IPMEDT4/Webapp/Kasper%20dit%20is%20de%20nieuwste/assets/botbreuken.jpg" class="responsive">
      <hr>
      <div>
        Als er duidelijk is wat voor beenbreuk je hebt krijg je
        hier informatie over en kan jou been gegipst worden.
      </div>
    </q-collapsible>
    <hr class="row">

    <!-- Item 4 : Gipsen -->
    <q-collapsible icon="local_hospital" label="Gipsen">
      Hieronder is een kort filmpje te zien over het gipsen van een been.
      <hr>
      <app-video></app-video>
      <hr>
      <div>
        Als het gipsen van het been is voldaan dan moet er nog een vervolg
        afspraak geplant worden.
      </div>
    </q-collapsible>
    <hr class="row">

    <!-- Item 5 : Plannen vervolg afspraak -->
    <q-collapsible icon="local_hospital" label="Plannen vervolg afspraak">
      Een vervolg afspraak is er om te kijken hoe het er voor staat.
      Geef hier alvast aan welke data je zou kunnen.
      <hr>
      <q-inline-datetime
        v-model="model"
        type="datetime"
      ></q-inline-datetime>
      <hr>
      <div>
        Als de vervolg afspraak is gemaakt dan moet je deze bevestigen bij de balie.
      </div>
    </q-collapsible>
    <hr class="row">

    <!-- Item 6 : Vervolg afspraak -->
    <q-collapsible icon="local_hospital" label="Vervolg afspraak">
      <div>
        Tijdens de vervolg afspraak word er gekeken naar jou been. En
        of het gips er al af kan.
      </div>
    </q-collapsible>
    <hr class="row">

  </div>
</template>

<script>
import Video from './Video.vue'
import { Dialog, Toast } from 'quasar'

export default {
  data: function () {
    return {
      status: 'voldaan'
    }
  },
  components: {
    appVideo: Video
  },
  methods: {
    // Dialoog functie
    dialog: function () {
      Dialog.create({
        title: 'Rating',
        form: {
          // Rating van sterren
          rating: {
            type: 'rating',
            label: 'Hoe veel sterren?',
            model: 0,
            max: 5
          },
          // Feedback box
          name: {
            type: 'textbox',
            label: 'Feedback',
            model: ''
          }
        },
        buttons: [
          'Cancel',
          {
            label: 'Ok',
            handler (data) {
              Toast.create('Returned ' + JSON.stringify(data))
              // data kan worden doorgestuurd
              // data.rating is 0
              // data.rating2 is 3
            }
          }
        ]
      })
    }
  }
}
</script>

<style scoped>
.row{
  border-width:3px;
}
.voldaan{
  background-color: lightgray;
}
</style>
