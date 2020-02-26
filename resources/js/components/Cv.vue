
<template>
    <div class="container-fluid" dir="rtl">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>
                            <p class="text-right">
                                سيري الذاتية
                            </p>
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h3>
                            <router-link :to="{ name: 'create-cv'}" class="btn btn-outline-success " type="button">
                                <i class="fas fa-plus"></i>
                                إنشاء سيرة ذاتية جديدة
                            </router-link>
                        </h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">
                            <p class="text-right">

                                {{ $t('name',$i18n.locale) }}
                            </p>

                        </th>


                        <th scope="col">
                            <p class="text-right">
                                {{ $t('status',$i18n.locale) }}
                            </p>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {{ $t('Next',$i18n.locale) }}
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Cv",
        data() {
            return {

            }
        },
        // watch: {
        //     locale(val) {
        //         this.$i18n.locale = val
        //     }
        // }
    }
</script>

<style scoped>

</style>
