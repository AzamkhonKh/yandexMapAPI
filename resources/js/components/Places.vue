<template>

    <div id = 'places'>
        <Place v-for:="place in places"> </Place>
    </div>
    <button id = "add_place_button" @click="addPlace()">Добавить место</button>
</template>

<script>
import Place from "./Place";
export default {
    comments: {
      Place
    },
    name: "Places",
    props: ['places'],
    methods:{
        addPlace : () => {
            axios.post('/api/map/place/add',{
                place: this.place
            }).then( response => {
                if (response.status === 201){
                    console.log('Successfully added');
                }else {

                    console.log('Unsuccesfully added');
                }
            }).catch( error => {
                console.log(error);
            });
        }
    }
}
</script>

<style scoped>

</style>
