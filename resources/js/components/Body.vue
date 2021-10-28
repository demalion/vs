<template>
    <div class="Body ml-20 w-4/6">
        <div class = "search">
            <input placeholder="Search"/>
        </div>  
        <div class="list">
            <div class="add-record">
                <h2>ADD</h2>
                <div class="add-action">
                    <button @click="add_set" class="focus:outline-none bg-yellow-200 hover:text-blue-100 focus:text-yellow-100">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x=".973" y="8.804" width="18" height="2" rx="1" transform="rotate(-1.2 .973 8.804)" fill="#000"/><rect x=".973" y="8.804" width="18" height="2" rx="1" transform="rotate(-1.2 .973 8.804)" fill="#000"/><rect x="10.988" y=".613" width="18" height="2" rx="1" transform="rotate(89.388 10.988 .613)" fill="#000"/><rect x="10.988" y=".613" width="18" height="2" rx="1" transform="rotate(89.388 10.988 .613)" fill="#000"/></svg>
                    </button>
                </div>
                <div>
                    <input 
                        type="text" 
                        v-model="new_set"
                        @keydown.enter="add_set"
                    />
               </div>
            </div>
            <ul class="record-list">
                <template v-if="sets.length">
                <hr class = "h-0.5 bg-gradient-to-r from-first-color to-second-color">
                {{ selection }}
                <li 
                    v-for="set in sets" 
                    :key="set.name"
                    @click="selection = set"
                    >
                    <div>
                        <div class="grid grid-cols-10 gap-4">
                            <div class="col-start-1">
                                                   <!-- data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 840 790"><path d="M462.57.57c208.212 0 377 168.789 377 377 0 164.706-105.62 304.742-252.826 356.072.24.283.483.58.73.883 16.113 19.78 35.922 31.675 59.43 35.687-86.634 31.37-150.117 20.336-190.451-33.103-18.332 11.148-27.49 28.646-27.473 52.494-36.907-17.182-51.654-54.2-44.242-111.056 0 0-13.67 5.794-53.402 45.46-26.49 26.444-65.826 35.956-118.012 28.537 51.3-23.565 77.81-60.522 79.528-110.87-40.545 8.653-24.348 14.697-77.769 52.9-35.614 25.47-79.02 31.197-130.216 17.184 37.052-22.852 54.805-49.434 53.26-79.746-29.017 18.58-56.355 21.8-82.015 9.662l.015-.008.221-.11c3.73-1.867 50.674-25.946 67.149-62.83 11.326-25.36 36.83-38.588 76.511-39.687l1.207-.03-15.503-17.296c-33.102 13.028-83.622 14.983-102.581-14.282-12.513-19.315-39.795-34.557-81.846-45.725l-1.279-.338c23.868-29.29 52.612-49.678 86.232-61.163a383.148 383.148 0 01-.668-22.635c0-208.211 168.789-377 377-377zm77.627 488.159c-89.989 10.788-160.416 49.033-211.28 114.732 15.776-7.98 34.204-10.639 55.285-7.974-42.008 29.606-62.671 61.269-61.99 94.989 30.699-33.161 67.486-46.958 110.361-41.392-28.932 28.919-34.512 62.459-16.74 100.62 9.788-29.487 25.632-46.054 47.53-49.699 15.79 42.997 51.42 62.666 106.892 59.007-104.168-85.388-114.187-175.483-30.058-270.283zM462.57 20.57c-197.165 0-357 159.835-357 357 0 5.714.135 11.397.4 17.045 29.204-6.666 61.713-7.297 97.526-1.896l16.39-42.875c41.532-40.312 80.765-72.431 117.699-96.357 22.585-1.499 47.324-1.499 74.216 0 61.504-60.936 118.06-105.415 169.67-133.435l32.986 55.303c12.3 18.75 12.3 33.749 0 44.995 16.081 17.63 19.58 40.765 10.497 69.402-4.4-17.893-14.292-30.487-29.679-37.783 5.566 23.833 3.353 43.96-6.639 60.382-7.345-19.233-19.208-32.324-35.587-39.272 2.6 40.155-4.32 64.752-20.757 73.793-3.368-9.317-9.6-15.376-18.697-18.177-9.542-1.55-20.497-.887-28.778 7.367-23.823 23.124-14.2 58.484-.923 66.884 11.666 9.348 25.996 11.178 42.99 5.493 16.116-3.676 22.42-24.013 23.32-38.684 13.966 12.44 19.71 25.69 17.235 39.747 20.303-12.532 31.24-33.19 32.813-61.975 11.296 11.888 14.707 27.672 10.23 47.353 19.392-10.037 31.056-31.503 34.991-64.396 33.558 47.001 44.843 93.596 33.855 139.783-13.05-19.04-31.584-20.975-55.602-5.805-35.668 22.528-79.704 59.557-91.098 130.458l-.336 2.159c-5.64 49.594 34.855 97.632 113.091 79.23 7.527-1.676 17.458-4.553 29.208-11.494 87.95-65.02 144.98-169.473 144.98-287.245 0-197.165-159.835-357-357-357zm-63.682 259.895c-32.43 15.873-54.625 18.694-66.583 8.463-19.844 8.59-29.14 22.85-27.887 42.783 12.462-16.052 34.897-20.78 67.306-14.188 16.229-8.927 25.284-21.28 27.164-37.058z" fill="#000" fill-rule="evenodd"/></svg>                -->
<!--                                <object
                                    type="image/svg+xml"
                                    width="30"
                                    height="30"
                                    data= {{ set.icon_svg_uri }}>
                               </object> -->
                                      
                                    <!-- работает -->
                                    <img src = "../../img/mid.svg" width="30" height="30"/> 
                                    <img v-bind:src =  "set.icon_svg_uri"  width="30" height="30"/> 
                                    
                                
                            </div>                            
                            <div class="col-start-2 col-end-5">
                                <h4 class = "py-3">{{ set.name }}</h4>                       
                            </div>
                            <div class="col-start-5">
                                <h4 class = "py-3">{{ set.code }}</h4>                       
                            </div>
                            <div class="col-start-9 col-end-9 justify-self-end self-center">
                                <svg class="h-6 w-6 fill-current"  fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4.707" y="17.435" width="18" height="2" rx="1" transform="rotate(-45 4.707 17.435)" fill="#000"/><circle cx="7.536" cy="16.021" r="2" transform="rotate(-45 7.536 16.02)" fill="#000"/></svg>
                            </div>                                
                            <div class="col-start-10 justify-self-center self-center pl-20">
<!--                                 <button @click="del_set(set.id)">
                                </button> -->
                                <button 
                                    @click="handle_delete(set)" 
                                    class="focus:outline-none">    
                                    <svg class="h-6 w-6 fill-current" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/></g><defs><clipPath id="clip0"><path d="M0 0h24v24H0z"/></clipPath></defs></svg>                   
                                </button>
                            </div>
                        </div>    
                        <hr class = "h-0.5 bg-gradient-to-r from-first-color to-second-color">
                    </div>
                </li>
                </template>
            </ul>
        </div>  
    </div>
</template>

<script>

export default {
    data(){
        return {
            sets: [
                ],
            new_set: "",
            selection: null,

        };
    },

    methods: {
        add_set(){

            const e = {
                code: this.new_set, 
                name: "",
                icon_svg_uri: "",
                path:"",
            };
            setTimeout(async ()=> {
                const f = await fetch(`https://api.scryfall.com/sets/${e.code}`);
                
                    const d = await f.json();
                
                    e.name = d.name;
                    d.icon_svg_uri = "https://c2.scryfall.com/file/scryfall-symbols/sets/mid.svg";
                    e.icon_svg_uri = d.icon_svg_uri;

                    const b = await fetch(d.icon_svg_uri);
                    e.path  = await b.blob();
                    
                    console.log(e.icon_svg_uri);
                    this.sets.push(e);

                }, 0);

            
            
            //console.log(this.sets);
        },

        handle_delete(e){
            this.sets = this.sets.filter(set => set !== e);
        },
    }
};
</script>