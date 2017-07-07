<template>
  <div>
    <!-- Item 0 : Aankomst-->
    <div v-if="items.content == 0">
      <img src="../../assets/lumc.jpg" class="responsive">
      <hr>
      <div>
        test Welkom bij het LUMC! U heeft zich net aangemeld bij de balie en heeft uw gegevens ontvangen en onze applicatie gedownload. Deze applicatie begeleid u door het proces van vandaag. Bekijk de volgende processen die u gaat doorlopen en ondervind meer informatie hierover. Ben je klaar met een stap dan kan je deze afronden en aan de gang met de volgende stap. <br>Wil je weten waar je heen moet in het ziekenhuis dan kan je de plattegrond openen en hier zien waar deze afdeling zich bevind.
      </div>
      <template v-if="currentId == 0">
        <hr>
        <button class="primary" @click="setDone">Rond stap af</button>
        <app-modal><img src="../../assets/plattegrond_main.jpg" class="responsive"></app-modal>
      </template>
    </div>

    <!-- Item 1 : EHBO -->
    <div v-if="items.content == 1">
      <div>
        Bij de EHBO wordt er onderzocht wat er aan de hand is met uw been.
        Als het duidelijk is dat er wat aan de hand is moeten
        er foto's gemaakt worden.
      </div>
      <template v-if="currentId == 1">
        <hr>
        <button class="primary" @click="setDone">Rond stap af</button>
        <app-modal><img src="../../assets/plattegrond_ehbo.jpg" class="responsive"></app-modal>
      </template>
    </div>

    <!-- Item 2: foto's maken-->
    <div v-if="items.content == 2">
      Je been kan op verschillende manieren gebroken zijn.
      Tijdens het maken van de foto word er duidelijk wat
      voor soort breuk je hebt. Binnen de sectie Radiologie worden er röntgenfoto's gemaakt van de breuk.
      <br><br>
      Zodra u binnenkomt wordt er aan u gevraagd om plaats te nemen bij de installatie waar de foto's worden gemaakt.
      <br><br>
      Vervolgens gaat de dokter of assistent de foto's daadwerkelijk maken en worden deze geëvalueerd.
      <img src="../../assets/botbreuken.jpg" class="responsive">
      <div>
        Als er duidelijk is wat voor beenbreuk je hebt krijg je
        hier informatie over en kan jou been gegipst worden.
      </div>
      <template v-if="currentId == 2">
        <hr>
        <button class="primary" @click="setDone">Rond stap af</button>
        <app-modal><img src="../../assets/plattegrond_foto.jpg" class="responsive"></app-modal>
      </template>
    </div>

    <!-- Item 3 : Gipsen -->
    <div v-if="items.content == 3">
      Nu je bent aangekomen bij deze stap, gaat je been worden gegipst. Tijdens het gipsen wordt gips
      aangebracht om je gebroken been. Dit is het eerste gips. Na een tijdje wordt het eerste gips er af gehaald
      en wordt weer een foto gemaakt en wordt hierna het tweede aangebracht. Gipsen zelf doet vaak geen tot weinig pijn en
      duurt ongeveer 15 tot 20 minuten.
      <br><br>
      Wist je dat gips ongeveer drie tot vijf weken blijft zitten? Meestal is dan je breuk weer genezen.
      <br><br>
      Hieronder is een kort filmpje te zien over het gipsen van een lichaamsdeel.
      <hr>
      <app-video></app-video>
      <hr>
      <div>
        Als het gipsen van het been is voldaan dan moet er nog een vervolg
        afspraak geplant worden.
      </div>
      <template v-if="currentId == 3">
        <button class="primary" @click="setDone">Rond stap af</button>
        <app-modal><img src="../../assets/plattegrond_gipsen.jpg" class="responsive"></app-modal>
      </template>
    </div>

    <!-- Item 4 : Plannen vervolg afspraak -->
    <div v-if="items.content == 4">

      <div>
        Als de vervolg afspraak is gemaakt dan moet je deze bevestigen bij de balie.
      </div>
      <button class="full-width primary" v-if="currentId == 4" @click="setDone">Rond stap af</button>
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
  import Modal from './Modal.vue'

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
      appVideo: Video,
      'app-modal': Modal
    },
    methods: {
      setDone: function () {
        this.list.completed = true
        history.pushState(null, null, this.items.title)
        this.increment()
      },
      increment: function () {
        bus.$emit('IncrementId', this.currentId)
      }
    }
  }
</script>

<style>
  .primary{
    margin:10px;
  }
  .breuk{
    margin: 10px;
  }
</style>
