<template>
    <header class="bg-gray-900">
        <div class="flex justify-between bg-gray-900 px-4 py-3">
            <svg class="h-8 w-auto fill-current text-yellow-200" width="70" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M.944 23V.984H4.56V19.64h9.792V23H.944zm23.553.256c-2.304 0-3.968-.235-4.992-.704-1.002-.49-1.642-1.28-1.92-2.368-.277-1.11-.416-2.901-.416-5.376 0-2.453.139-4.224.416-5.312.278-1.11.918-1.899 1.92-2.368 1.024-.47 2.688-.704 4.992-.704s3.958.235 4.96.704c1.024.47 1.675 1.259 1.952 2.368.278 1.088.416 2.859.416 5.312 0 2.475-.138 4.267-.416 5.376-.277 1.088-.928 1.877-1.952 2.368-1.002.47-2.656.704-4.96.704zm0-3.008c1.344 0 2.272-.117 2.784-.352.512-.256.822-.715.928-1.376.128-.661.192-1.899.192-3.712 0-1.813-.064-3.04-.192-3.68-.106-.661-.416-1.11-.928-1.344-.512-.235-1.44-.352-2.784-.352-1.344 0-2.272.117-2.784.352s-.832.683-.96 1.344c-.106.64-.16 1.867-.16 3.68 0 1.813.054 3.05.16 3.712.128.661.448 1.12.96 1.376.512.235 1.44.352 2.784.352zm17.862 9.344c-1.046 0-2.102-.032-3.168-.096a34.71 34.71 0 01-2.496-.224v-2.816c1.792.085 3.413.128 4.864.128 1.578 0 2.71-.128 3.392-.384.682-.235 1.12-.672 1.312-1.312.213-.619.32-1.653.32-3.104v-.832h-.16c-.427.81-1.056 1.376-1.888 1.696-.81.299-1.846.448-3.104.448-1.494 0-2.656-.245-3.488-.736-.832-.49-1.43-1.323-1.792-2.496-.363-1.173-.544-2.848-.544-5.024 0-2.197.181-3.893.544-5.088.362-1.216.96-2.07 1.792-2.56.853-.512 2.026-.768 3.52-.768 1.173 0 2.197.17 3.072.512.896.341 1.568.97 2.016 1.888h.192l.128-2.144h3.104v14.336c0 2.261-.17 3.968-.512 5.12-.32 1.173-1.024 2.037-2.112 2.592-1.067.576-2.73.864-4.992.864zm.48-9.632c.853 0 1.536-.096 2.048-.288.512-.213.896-.523 1.152-.928.234-.384.384-.864.448-1.44.064-.597.096-1.43.096-2.496 0-1.067-.032-1.888-.096-2.464-.064-.597-.214-1.088-.448-1.472-.256-.427-.64-.736-1.152-.928-.512-.213-1.195-.32-2.048-.32-1.195 0-2.048.117-2.56.352-.49.213-.822.661-.992 1.344-.17.683-.256 1.845-.256 3.488 0 1.621.085 2.773.256 3.456.17.683.501 1.141.992 1.376.512.213 1.365.32 2.56.32zm18.908 3.296c-2.304 0-3.968-.235-4.992-.704-1.002-.49-1.642-1.28-1.92-2.368-.277-1.11-.416-2.901-.416-5.376 0-2.453.139-4.224.416-5.312.278-1.11.918-1.899 1.92-2.368 1.024-.47 2.688-.704 4.992-.704s3.958.235 4.96.704c1.024.47 1.675 1.259 1.952 2.368.278 1.088.416 2.859.416 5.312 0 2.475-.138 4.267-.416 5.376-.277 1.088-.928 1.877-1.952 2.368-1.002.47-2.656.704-4.96.704zm0-3.008c1.344 0 2.272-.117 2.784-.352.512-.256.822-.715.928-1.376.128-.661.192-1.899.192-3.712 0-1.813-.064-3.04-.192-3.68-.106-.661-.416-1.11-.928-1.344-.512-.235-1.44-.352-2.784-.352-1.344 0-2.272.117-2.784.352s-.832.683-.96 1.344c-.106.64-.16 1.867-.16 3.68 0 1.813.054 3.05.16 3.712.128.661.448 1.12.96 1.376.512.235 1.44.352 2.784.352z"/></g><defs><clipPath id="clip0"><path d="M0 0h70v30H0z"/></clipPath></defs></svg>
            <div :class="{ antialiased: menu_is_open }">
                <button @click=toggle class="focus:outline-none text-yellow-200 hover:text-yellow-100 focus:text-yellow-100">
                    <svg v-if="menu_is_open" class="h-8 w-6 fill-current" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/></g><defs><clipPath id="clip0"><path d="M0 0h24v24H0z"/></clipPath></defs></svg>
                    <svg v-if="!menu_is_open" class="h-8 w-6 fill-current" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="5" width="18" height="2" rx="1" /><rect x="3" y="11" width="18" height="2" rx="1" /><rect x="3" y="17" width="18" height="2" rx="1"/></svg>
                </button>  
            </div>
        </div>
        <!-- <nav-modal></nav-modal>  -->
        <div v-if="window_width > '1280'">
        <!--<nav-modal
            v-show="modal_open"
            @close="modal_open = false"
        ></nav-modal>    --> 
            <nav v-show="menu_is_open">
                <div class="fixed inset-5 w-full h-screen flex items-center justify-center z-10">
                    <div><!-- wrapper - чтоб окно было плюс-минус с размер текста -->
                        <div class="relative w-full max-w-2xl bg-gray-900 shadow-lg rounded p-8 bg-gray-900 px-4 py-3">
                        
                            <button @click=toggle class="absolute top-0 right-0 focus:outline-none text-yellow-200 hover:text-yellow-100 focus:text-yellow-100">
                                <svg v-if="menu_is_open" class=" mt-2 mr-2 h-8 w-6 fill-current" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/></g><defs><clipPath id="clip0"><path d="M0 0h24v24H0z"/></clipPath></defs></svg>
                            </button>  
                            <div class="px-4 py-3 pb-5 text-yellow-100 border-b border-yellow-300">
                                <a href="#" class="block px-1 py-1 rounded hover:bg-gray-800">Все карты</a>
                                <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Бустеры</a>
                                <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Дисплеи</a>
                                <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Запечатанная продукция</a>
                                <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Сеты и лоты</a>
                                <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Аксессуары</a>
                            </div>                                
                        </div>    
                    </div>
                </div>
            </nav>
        </div>
        <div v-else>  
            <nav v-show="menu_is_open">
                <div class="px-4 py-3 pb-5 text-yellow-100 border-b border-yellow-300">
                    <a href="#" class="block px-1 py-1 rounded hover:bg-gray-800">Все карты</a>
                    <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Бустеры</a>
                    <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Дисплеи</a>
                    <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Запечатанная продукция</a>
                    <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Сеты и лоты</a>
                    <a href="#" class="block px-1 py-1 rounded mt-3 hover:bg-gray-800">Аксессуары</a>
                </div>
            </nav>        
        </div>
    </header>   
</template>


<script>

/* import NavModal from '@/components/NavModal' */

export default {

/*     components: {
        NavModal,
    },  */    
    props: [],
    data() {
        return{
            menu_is_open: false,
            //modal_open: false,
            
            window_width: window.innerWidth
        }
    },
    methods: {
        toggle() {
            this.menu_is_open = ! this.menu_is_open
            // this.modal_open = ! this.modal_open
        }
    },
        mounted() {
        window.onresize = () => {
            
            this.window_width = window.innerWidth
              
        }
    }, 

}
</script>
