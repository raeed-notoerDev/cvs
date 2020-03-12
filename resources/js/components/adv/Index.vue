<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h3>
                            <p class="text-right">
                                {{$t('create-ad',$i18n.locale)}}
                            </p>
                        </h3>

                    </div>

                    <div class="col-md-4">
                        <h3>
                            <router-link :to="{ name: 'categories-ad'}" class="btn btn-outline-success " type="button">
                                <i class="fas fa-plus"></i>
                                {{$t('add_adv',$i18n.locale)}}
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
                            اسم الإعلان
                        </th>
                        <th scope="col">
                            القسم
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
                    <tr v-for="ad in ads">
                        <td>
                            {{ad.name}}
                        </td>
                        <td>
                            {{ad.department}}
                        </td>
                        <td>
                            {{ad.date |myDate}}
                        </td>
                        <td>
                            {{ad.status}}
                        </td>
                        <td>
                            <router-link :to="{ name: 'show-ad', params: { id: ad.id } }">
                                <button class=""><i class="fas fa-eye"></i></button>
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
    </div>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                ads: []
            }
        },
        methods: {
            get_ads() {
                axios.get('api/user/ads').then(response => {
                    this.ads = response.data;
                })
            }
        }, created() {
            this.get_ads();
        }
    }
</script>

<style scoped>

</style>
