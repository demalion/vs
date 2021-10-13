<template>
  <div id="app" class="min-h-screen bg-white antialiased">
  <Header/>
  <Filters/>
    <main class="px-6 py-4 bg-gray-700">
      
<!--  <h3 class="text-yellow-200 text-xl text-center pb-2">Отдельные карты</h3>
      <div>
        <div class="container">
          <img class="rounded h-64 mx-auto"  src="./assets/img/BLA_gy_w.png" alt="синглы">
        </div>
      </div> -->
      <h3 class="text-yellow-200 text-xl text-center pb-2">Отдельные карты</h3>
      <div class="sm:flex sm:-mx-3 sm:overflow-x-auto sm:pb-6">
        <div v-for = "n in 4" v-bind:key="n" :class="{'mt-10': n>1}" class="sm:mt-0 sm:max-w-xs sm:w-full sm:flex-shrink-0 sm:px-2">  
          <div class="mt-6">
            <div class="container">
              <img class="rounded-card shadow-md h-auto mx-50"  src="../img/iko-382-sprite-dragon.jpg" alt="синглы">
            </div>
          </div> 
          <div class="relative px-4 -mt-16">
            <div class="bg-yellow-100 bg-opacity-90 rounded px-4 py-3 shadow-lg">
              <h4 class="text-gray-900  text-xl mt-1">Sprite Dragon</h4>
              <h5 class="text-sm italic text-gray-600">Dorat, the Perfect Pet</h5>   
              <div class="text-gray-700 text-2xl mt-3">
                400 &#8381;
              </div>
              <div class="text-sm font-semibold text-gray-700 flex items-center">
                <svg class="h-5 w-5 mr-1 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M24.004 9.426c0-.356-.27-.574-.809-.664L15.953 7.71l-3.246-6.563c-.18-.394-.418-.593-.703-.593-.29 0-.527.199-.707.593L8.05 7.711.809 8.76c-.54.09-.809.31-.809.665 0 .203.121.433.36.695l5.253 5.106-1.242 7.21c-.02.137-.027.231-.027.29 0 .203.05.375.148.511.102.14.254.211.457.211.172 0 .364-.058.574-.172L12 19.871l6.48 3.406c.2.114.395.172.575.172.195 0 .34-.07.441-.21a.837.837 0 00.152-.512c0-.125-.007-.22-.015-.29l-1.242-7.21 5.238-5.106c.25-.25.375-.484.375-.695zm0 0"/></svg>
                <svg class="h-5 w-5 mr-1 fill-current text-yellow-400" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M24.004 9.426c0-.356-.27-.574-.809-.664L15.953 7.71l-3.246-6.563c-.18-.394-.418-.593-.703-.593-.29 0-.527.199-.707.593L8.05 7.711.809 8.76c-.54.09-.809.31-.809.665 0 .203.121.433.36.695l5.253 5.106-1.242 7.21c-.02.137-.027.231-.027.29 0 .203.05.375.148.511.102.14.254.211.457.211.172 0 .364-.058.574-.172L12 19.871l6.48 3.406c.2.114.395.172.575.172.195 0 .34-.07.441-.21a.837.837 0 00.152-.512c0-.125-.007-.22-.015-.29l-1.242-7.21 5.238-5.106c.25-.25.375-.484.375-.695zm0 0"/></svg>
                <svg class="h-5 w-5 mr-1 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M24.004 9.426c0-.356-.27-.574-.809-.664L15.953 7.71l-3.246-6.563c-.18-.394-.418-.593-.703-.593-.29 0-.527.199-.707.593L8.05 7.711.809 8.76c-.54.09-.809.31-.809.665 0 .203.121.433.36.695l5.253 5.106-1.242 7.21c-.02.137-.027.231-.027.29 0 .203.05.375.148.511.102.14.254.211.457.211.172 0 .364-.058.574-.172L12 19.871l6.48 3.406c.2.114.395.172.575.172.195 0 .34-.07.441-.21a.837.837 0 00.152-.512c0-.125-.007-.22-.015-.29l-1.242-7.21 5.238-5.106c.25-.25.375-.484.375-.695zm0 0"/></svg>
                
                <span class="ml-3 mt-1">3 штуки</span>
              </div>
            </div>
          </div> 
        </div>
      </div>

    </main>
  </div>
</template>

<script>

import Header from './components/Header'
import Filters from './components/Filters'

export default {

  name: 'App',

  components: {
    Header,
    Filters,
  }
}
</script>

<style src="../css/app.css"></style>
