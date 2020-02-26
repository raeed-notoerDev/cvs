<template>
    <div class="container-fluid" dir="rtl">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>
                            <p class="text-right">
                                عروضي التوظيف
                            </p>
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h3>
                            <router-link :to="{ name: 'create-job'}" class="btn btn-outline-success " type="button">
                                <i class="fas fa-plus"></i>
                                {{$t('add_job',$i18n.locale)}}
                            </router-link>
                        </h3>
                    </div>

                </div>

            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">
                        عنوان الوظيفة
                    </th>
                    <th scope="col">
                        القسم المخصص
                    </th>
                    <th scope="col">
                        تاريخ الادخال
                    </th>
                    <th scope="col">
                        الحالة
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="opportunity in opportunities">
                    <td>
                        {{opportunity.job_title}}
                    </td>
                    <td>
                        {{opportunity.department}}
                    </td>
                    <td>
                        {{opportunity.date |myDate}}
                    </td>
                    <td>
                        {{opportunity.status}}
                    </td>
                    <td>

                           <router-link :to="{ name: 'view_job', params: { id: opportunity.id } }">
                               <button class=""> <i class="fas fa-eye"></i>  </button>
                           </router-link>

                        <button>
                            <i class="fas fa-edit"></i>
                        </button>
                        <button>
                        <i class="fas fa-power-off"></i>
                        </button>
                        <button>
                        <i class="fas fa-trash"></i>
                        </button>
                        <div class="tooltip fade top in" role="tooltip" id="tooltip660782"
                             style="top: 337px; left: 71.0156px; display: none;">
                            <div class="tooltip-arrow" style="left: 50%;"></div>
                            <div class="tooltip-inner">تحميل</div>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "JobOpportunity",
        data() {
            return {

                opportunities: []
            }
        }, methods: {
            get_opportunities() {
                axios.get('api/user/opportunities').then(response => {
                    console.log(response.data);
                    this.opportunities = response.data;
                }).catch();
            }

        }, created() {
            this.get_opportunities();
        }
    }
</script>

<style scoped>

</style>
