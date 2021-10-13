<template>
    <p class="text-gray-200">Resize me! Current width is: {{ window_width }}</p> 
    <div class="fixed inset-5 w-full h-screen flex items-center justify-center modal-backdrop" v-show="showing">
        <div class="modal">
            <div class="relative w-full max-w-2xl bg-white shadow-lg rounded p-8">
            <p>I am a new component NavModal is my name</p>
        <button
            aria-label="close"
            class="absolute top-0 right-0 text-xl text-gray-500 my-2 mx-4" 
            @click.prevent="close"
        >x</button>
        </div> 
        </div>

    </div> 
     <div></div>
</template>

<script>
  export default {
    props: ['showing'], 
    methods: {
        close() {
            this.$emit('close')
        },
    }
    
}
</script>