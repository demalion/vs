<template>
    <section > 
      <div class="flex justify-between bg-yellow-200 px-3 py-3">
        <div class="relative sm:w-2/3">
          <div class="absolute inset-y-0 left-0  flex items-center pl-3 pt-1">
            <svg class="h-6 w-6 fill-current text-yellow-200" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 12A5 5 0 107 2a5 5 0 000 10zm0 2A7 7 0 107 0a7 7 0 000 14z" /><path d="M11.695 11.72a1 1 0 011.414-.025l3.799 3.669a1 1 0 11-1.39 1.438l-3.799-3.669a1 1 0 01-.024-1.414z"/></svg>
          </div>    
          <input class="block w-full bg-gray-800 focus:outline-none text-yellow-200 rounded px-12 pr-3 py-3 placeholder-yellow-200 placeholder-opacity-50" placeholder = "Поиск">
        </div>  
        <button @click="toggle" type="button" class="bg-yellow-300 rounded px-3 py-2 focus:outline-none sm:w-1/6">
          <svg class="h-6 w-10 fill-current text-gray-900 " width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="5" width="18" height="2" rx="1" /><rect x="3" y="11" width="18" height="2" rx="1" /><rect x="3" y="17" width="18" height="2" rx="1" /><circle cx="8" cy="6" r="2" /><circle cx="17" cy="12" r="2" /><circle cx="12" cy="18" r="2" /></svg>
        </button>                 
      </div>  
    <div v-if="window_width > '1280'"> 
      <form v-show="is_open">
      <div class="fixed w-full h-screen flex items-start m-8 justify-center z-10"> 
        <div class="relative w-1/2 shadow-lg rounded bg-gray-800">
        
          <div class="px-4 py-2 border-t border-yellow-300 sm:flex" >
              <div class="py-2 sm:w-1/2 sm:mr-6">
                  <label class="flex items-center">
                      <span class="flex-auto pr-2 text-yellow-200 font-semibold">Категория</span>
                      <select class="w-2/3 form-select rounded">
                          <option>Картон</option>
                      </select>
                  </label>              
              </div>      
              <div class="py-2 sm:w-1/2">
                  <label class="flex items-center">                  
                      <span class="flex-auto pr-2 text-yellow-200 rounded font-semibold">Издание</span>
                      <select class="w-2/3 form-select rounded">
                          <option>Ikoria: Lair of Behemoths</option>
                      </select>
                  </label>    
              </div>
          </div> 
        <div class="border-t border-yellow-300 px-4 py-2">
            <span class="block pr-2 text-yellow-200 rounded font-semibold">Foil</span>
            <div class="sm:flex sm:ml-3"> 
              <label class="flex item-center mt-3 sm:w-1/4">
                <input class="form-radio h-5 w-5" type="radio" name="isItFoil" value="Все">
                <span class="ml-2 text-yellow-200">Все</span> 
              </label>
              <label class="flex item-center mt-3 sm:w-1/4">  
                <input class="form-radio h-5 w-5" type="radio" name="isItFoil" value="Фойл">
                <span class="ml-2 text-yellow-200">Фойл</span> 
              </label>
              <label class="flex item-center mt-3 sm:w-1/4">         
                <input class="form-radio h-5 w-5" type="radio" name="isItFoil" value="Обычные">
                <span class="ml-2 text-yellow-200">Обычные</span> 
              </label>
            </div>
            
          </div>            

          <div class="px-4 py-2 border-t border-yellow-300"> 
               <div class="py-2 sm:w-1/2">
                  <label class="flex items-center">
                      <span class="flex-auto pr-2 text-yellow-200 font-semibold">Состояние</span>
                      <select class="w-2/3 form-select rounded">
                          <option>M/NM</option>
                          <option>NM</option>
                          <option>NM-</option>
                          <option>NM-/SP+</option>
                          <option>SP</option>
                          <option>PL</option>
                          <option>MP</option>
                          <option>HP</option>
                          <option>Не указано</option>
                      </select>
                  </label>              
              </div> 
          </div>

          <div class="border-t border-yellow-300 px-4 py-2">
            <span class="block text-yellow-200 font-semibold">Язык</span>  
            <div class="sm:flex sm:flex-wrap sm:ml-3">
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Russish">
                <span class="ml-2 text-yellow-200">Русский</span>
              </label>
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="English">
                <span class="ml-2 text-yellow-200">English</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Japonish">
                <span class="ml-2 text-yellow-200">Japan</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Frazusish">
                <span class="ml-2 text-yellow-200">French</span>
              </label>  
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Spanish">
                <span class="ml-2 text-yellow-200">Spanish</span>
              </label> 
            </div>
                                       
          </div>

          <div class="border-t border-yellow-300 px-4 py-2">
            <span class=" block text-yellow-200 font-semibold">Редкость</span>  
            <div class="sm:flex sm:flex-wrap sm:ml-3">
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Mythic_Rare">
                <span class="ml-2 text-yellow-200">Mythic Rare</span>
              </label>
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Rare">
                <span class="ml-2 text-yellow-200">Rare</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Uncommon">
                <span class="ml-2 text-yellow-200">Uncommon</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Common">
                <span class="ml-2 text-yellow-200">Common</span>
              </label> 
            </div>                     
          </div>

        <div class="bg-gray-900 px-4 py-4 sm:text-right">
          <button class= "sm:w-1/6 sm:inline-block block w-full bg-yellow-300 rounded px-4 py-2 leading-loose hover:bg-yellow-200">
            Найти
          </button>  
        </div>                   
         
      </div>    
      </div>
    </form> 
    </div>  
    <div v-else> 
      <form v-show="is_open" class="bg-gray-800">
          <div class="px-4 py-2 border-t border-yellow-300 sm:flex" >
              <div class="py-2 sm:w-1/2 sm:mr-6">
                  <label class="flex items-center">
                      <span class="flex-auto pr-2 text-yellow-200 font-semibold">Категория</span>
                      <select class="w-2/3 form-select rounded">
                          <option>Картон</option>
                      </select>
                  </label>              
              </div>      
              <div class="py-2 sm:w-1/2">
                  <label class="flex items-center">                  
                      <span class="flex-auto pr-2 text-yellow-200 rounded font-semibold">Издание</span>
                      <select class="w-2/3 form-select rounded">
                          <option>Ikoria: Lair of Behemoths</option>
                      </select>
                  </label>    
              </div>
          </div>
          <div class="border-t border-yellow-300 px-4 py-2">
            <span class="block pr-2 text-yellow-200 rounded font-semibold">Foil</span>
            <div class="sm:flex sm:ml-3"> 
              <label class="flex item-center mt-3 sm:w-1/4">
                <input class="form-radio h-5 w-5" type="radio" name="isItFoil" value="Все">
                <span class="ml-2 text-yellow-200">Все</span> 
              </label>
              <label class="flex item-center mt-3 sm:w-1/4">  
                <input class="form-radio h-5 w-5" type="radio" name="isItFoil" value="Фойл">
                <span class="ml-2 text-yellow-200">Фойл</span> 
              </label>
              <label class="flex item-center mt-3 sm:w-1/4">         
                <input class="form-radio h-5 w-5" type="radio" name="isItFoil" value="Обычные">
                <span class="ml-2 text-yellow-200">Обычные</span> 
              </label>
            </div>
            
          </div>            

          <div class="px-4 py-2 border-t border-yellow-300"> 
               <div class="py-2 sm:w-1/2">
                  <label class="flex items-center">
                      <span class="flex-auto pr-2 text-yellow-200 font-semibold">Состояние</span>
                      <select class="w-2/3 form-select rounded">
                          <option>M/NM</option>
                          <option>NM</option>
                          <option>NM-</option>
                          <option>NM-/SP+</option>
                          <option>SP</option>
                          <option>PL</option>
                          <option>MP</option>
                          <option>HP</option>
                          <option>Не указано</option>
                      </select>
                  </label>              
              </div> 
          </div>

          <div class="border-t border-yellow-300 px-4 py-2">
            <span class="block text-yellow-200 font-semibold">Язык</span>  
            <div class="sm:flex sm:flex-wrap sm:ml-3">
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Russish">
                <span class="ml-2 text-yellow-200">Русский</span>
              </label>
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="English">
                <span class="ml-2 text-yellow-200">English</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Japonish">
                <span class="ml-2 text-yellow-200">Japan</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Frazusish">
                <span class="ml-2 text-yellow-200">French</span>
              </label>  
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Spanish">
                <span class="ml-2 text-yellow-200">Spanish</span>
              </label> 
            </div>
                                       
          </div>

          <div class="border-t border-yellow-300 px-4 py-2">
            <span class=" block text-yellow-200 font-semibold">Редкость</span>  
            <div class="sm:flex sm:flex-wrap sm:ml-3">
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Mythic_Rare">
                <span class="ml-2 text-yellow-200">Mythic Rare</span>
              </label>
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Rare">
                <span class="ml-2 text-yellow-200">Rare</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Uncommon">
                <span class="ml-2 text-yellow-200">Uncommon</span>
              </label>              
              <label class="flex items-center mt-3 sm:w-1/4">
                <input class="form-checkbox h-5 w-5" type="checkbox" name="Common">
                <span class="ml-2 text-yellow-200">Common</span>
              </label> 
            </div>                     
          </div>

        <div class="bg-gray-900 px-4 py-4 sm:text-right">
          <button class= "sm:w-1/6 sm:inline-block block w-full bg-yellow-300 rounded px-4 py-2 leading-loose hover:bg-yellow-200">
            Найти
          </button>  
        </div>   

      </form>
    </div>  
    </section>
</template>

<script>
  export default {
    props: [],
    data() {
        return {
          is_open: false,
          
          window_width: window.innerWidth
        }
    },
    methods: {
      toggle() {
        this.is_open = !this.is_open
      }
    },

 
     
}    
  
</script>
