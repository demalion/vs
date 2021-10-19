<template>
  <div id="app" class="min-h-screen bg-white antialiased">
  <Header/>
  <!-- <Filters/> -->
    <main>
      <Body/>

    </main>
  </div>
</template>

<script>

import Header from './components/Header'
import Body from './components/Body'
//import Filters from './components/Filters'

export default {

  name: 'App',

  components: {
    Header,
    Body,
//    Filters,
  }
}
</script>

<style src="../css/app.css"></style>

