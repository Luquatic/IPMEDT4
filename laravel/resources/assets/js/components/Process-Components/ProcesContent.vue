<template>
  <div>
    <!-- Item 0 : Aankomst-->
    <div v-if="items.content == 0">
      <img src="/images/lumc.jpg" class="responsive">
      <hr>
      <div>
        Welkom bij het LUMC!
        U heeft zich net aangemeld bij de balie en heeft uw gegevens ontvangen.
        Deze app begeleid u door het proces van vandaag.
        Bekijk de volgende processen die u gaat doorlopen en ondervind meer
        informatie hierover.
      </div>
      <button class="full-width primary fullwidth-knop" v-if="currentId == 0" @click="setDone">Klaar met deze stap</button>
    </div>

    <!-- Item 1 : EHBO -->
    <div v-if="items.content == 1">
      <div>
        Bij de EHBO wordt er onderzocht wat er aan de hand is met uw been.
        Als het duidelijk is dat er wat aan de hand is moeten
        er foto's gemaakt worden.
      </div>
      <hr>
      <!-- feedback knop -->
      <!-- <button @click="dialog" class="primary small">
        Hoe was het bezoek bij de EHBO?
      </button> -->
      <button class="full-width primary fullwidth-knop" v-if="currentId == 1" @click="setDone">Klaar met deze stap</button>
    </div>

    <!-- Item 2: foto's maken-->
    <div v-if="items.content == 2">
      Je been kan op verschillende manieren gebroken zijn.
      Tijdens het maken van de foto word er duidelijk wat
      voor soort breuk je hebt.
      <hr>
      <img src="/images/botbreuken.jpg" class="responsive">
      <hr>
      <div>
        Als er duidelijk is wat voor beenbreuk je hebt krijg je
        hier informatie over en kan jou been gegipst worden.
      </div>
      <button class="full-width primary fullwidth-knop" v-if="currentId == 2" @click="setDone">Klaar met deze stap</button>
    </div>

    <!-- Item 3 : Gipsen -->
    <div v-if="items.content == 3">
      Hieronder is een kort filmpje te zien over het gipsen van een been.
      <hr>
      <app-video></app-video>
      <hr>
      <div>
        Als het gipsen van het been is voldaan dan moet er nog een vervolg
        afspraak geplant worden.
      </div>
      <button class="full-width primary fullwidth-knop" v-if="currentId == 3" @click="setDone">Klaar met deze stap</button>
    </div>

    <!-- Item 4 : Plannen vervolg afspraak -->
    <div v-if="items.content == 4">
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
      <button class="full-width primary fullwidth-knop" v-if="currentId == 4" @click="setDone">Klaar met deze stap</button>
    </div>

    <!-- Item 5 : Vervolg afspraak -->
    <div v-if="items.content == 5">
      Tijdens de vervolg afspraak word er gekeken naar jou been. En
      of het gips er al af kan.
    </div>
  </div>
</template>

<script>
  import bus from '../../bus'
  import Video from './Video.vue'
//  import { Dialog, Toast } from 'quasar'

  export default{
    props: ['items', 'currentId'],
    data: function () {
      return {
        status: 'voldaan',
        isOpen: false,
        list: this.items
      }
    },
    components: {
      appVideo: Video
    },
    methods: {
      setDone: function () {
        this.list.completed = true
        this.increment()
      },
      increment: function () {
        bus.$emit('IncrementId', this.currentId)
      },
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

<style>
  .fullwidth-knop{
    margin:15px;
  }
</style>
