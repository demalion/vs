<template>
    <div>
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
            </div>
            <ul class="record-list">
                <li v-for="set in sets" v-bind:key="set.id">
                    <div>
                        <h4><span>{{ set.name }} </span>  <span>-----{{ set.code }} </span></h4>
                        
                        
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
    }
};
</script>