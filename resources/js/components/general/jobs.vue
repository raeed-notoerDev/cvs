<template>
    <div class="container" dir="rtl">
        <!--        <header></header>-->
        <div v-for="(specialization,index) in specializations">
            <div class="row">
                    <div class="container  form-group">
                        <div class="border border-dark" style="padding:10px">
                            <div class="media">
                                <img class="mr-3" src="/images/Avatar.png" style="height: 100px;width: 100px"
                                     alt="Generic placeholder image">
                                <div class="media-body" >
                                        <router-link to="/cv">
                                            <h5 class="mt-0"> {{specializations[index]['specialization_name']}}</h5>
                                            {{specializations[index]['opportunity']}}
                                            فرصة
                                        </router-link>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "jobs",
        data() {
            return {
                specializations: [],
                columns: [1, 2],
                index_for: 0
            }
        },
        methods: {
            allSpecialization() {
                axios.get('api/specialization').then(response => {
                    this.specializations = response.data.specializations;
                    console.log(response);
                })
            }
        }, created() {
            this.allSpecialization();
        }
    }
</script>

<style scoped>

</style>
