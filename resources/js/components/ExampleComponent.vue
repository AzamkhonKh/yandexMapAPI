<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <Places places="{{places}}"></Places>
            </div>
            <div class="col-md-8" v-if="status">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        {{ message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Places from './Places'

export default {
    components: {Places},
    props: ['message', 'status'],
    data: function () {
        return {
            places: [],
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    getPlaces() {
        axios.get('/api/places').then(response => {
            this.places = response.data;
        }).catch(error => {
            console.log(error);
        })
    }
}
</script>
