<template>
    <div class="container">
        <div class="row" v-for="cv in cvs">
            <div class="col">
                <div class="border border-dark">
                    <h1>
                        {{cv.job_title}}
                    </h1><br>
                    <h5>
                        {{cv.name}}
                    </h5><br>
                    <h5>
                        {{cv.nationality}}
                    </h5><br>
                    <h5></h5><br>
                </div>
            </div>
            <div class="col"></div>
        </div>
        asdasdd
    </div>
</template>

<script>
    export default {
        name: "Cv",
        data() {
            return {
                cvs: []
            }
        }
    }
</script>

<style scoped>

</style>
