<template>
    <div class="Body ml-20 w-4/6">
        <div class = "search">
            <input placeholder="Search"/>
        </div>  
        <div class="list">
            <div class="add-record">
                <h2>ADD</h2>
                <div class="add-action">
                    <button @click=toggle class="focus:outline-none bg-yellow-200 hover:text-blue-100 focus:text-yellow-100">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x=".973" y="8.804" width="18" height="2" rx="1" transform="rotate(-1.2 .973 8.804)" fill="#000"/><rect x=".973" y="8.804" width="18" height="2" rx="1" transform="rotate(-1.2 .973 8.804)" fill="#000"/><rect x="10.988" y=".613" width="18" height="2" rx="1" transform="rotate(89.388 10.988 .613)" fill="#000"/><rect x="10.988" y=".613" width="18" height="2" rx="1" transform="rotate(89.388 10.988 .613)" fill="#000"/></svg>
                    </button>
                </div>
                <form action="" @submit="add_set" class="py-2">
                    <input type="text" v-model="new_set"/>
                </form>
            </div>
            <ul class="record-list">
                <hr class = "h-0.5 bg-gradient-to-r from-first-color to-second-color">
                <li v-for="set in sets" v-bind:key="set.id">
                    <div>
                        <div class="grid grid-cols-10 gap-4">
                            <div class="col-start-1 col-end-5">
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
                                <button @click="del_set(set.id)" class="focus:outline-none">    
                                    <svg class="h-6 w-6 fill-current" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="4.657" y="17.385" width="18" height="2" rx="1" transform="rotate(-45 4.657 17.385)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/><rect x="6.216" y="4.541" width="18" height="2" rx="1" transform="rotate(45.587 6.216 4.54)"/></g><defs><clipPath id="clip0"><path d="M0 0h24v24H0z"/></clipPath></defs></svg>                   
                                </button>
                            </div>
                        </div>    
                        <hr class = "h-0.5 bg-gradient-to-r from-first-color to-second-color">
                    </div>
                </li>
            </ul>
        </div>  
    </div>
</template>

<script>

export default {
    data(){
        return {
            sets: [],
            new_set: "",

        };
    },

    created(){
        this.fetch_sets();
       
    },

    methods: {
        ///////////////////--set--//////////////////
        fetch_sets() {
            fetch('api/sets')
            .then(res => res.json()) 
            .then(({data}) => {
                this.sets = data;
                //console.log(data);
            })
            .catch(err => console.log(err));
        },   

        // add new set
        add_set(e){
            e.preventDefault();
            const new_set = {
                scry_id:       'd87553e0-8cba-3e40-963b-dfd8782c26d2',
                name:          this.new_set,
                code:          'COD',
                release_date:  '2021-03-10 00:35:28',
                icon_svg_uri:  'https://via.placeholder.com/0x1.png/003355?text=oikkko',
            };

            //POST request
            fetch("/api/sets", {
                method: "POST",
                headers: {
                    "content-type": 'appication/json',
                },
                body: JSON.stringify(new_set),

            }).then(()=>this.sets.push(new_set))
            .catch(err => console.log(err));

            //Clear new set
            this.new_set = "";
        },

        //Delete set
        del_set(e){
             if (confirm("Are you sure?")){
                fetch(`/api/sets/${e}`,{
                    method: 'delete',
                })
                .then((res) => res.json())
                .then(() => {
                    console.log(e);
                    this.sets = this.sets.filter((set) => set.id !== e);
                    console.log(this.sets);
                })
                .catch(err => console.log(err));

             }
        }


    }
};
</script>