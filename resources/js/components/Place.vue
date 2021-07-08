<template>
    <div id = 'default_place' class="hide">
        <div class="card">
            <div class="card-header d-flex">
                <div>
                    {{place.name}}
                </div>
                <div>
                    <button type="submit" name = 'deletePlace' class="btn-danger">
                        Удалить
                    </button>
                    <button type="submit" name = 'editPlace' class="btn-warning">
                        Изменить
                    </button>
                </div>
            </div>
            <div class="card-body">
                {{place.baloon_text}}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Place",
    props: ['place'],
    methods:{
        delete: () => {
            axios.post('')
        }
    }
}
</script>

<style scoped>

</style>
