<template>
    <div class="container">
        <form class="form-group" @submit.prevent="addJob">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{$t('add_job',$i18n.locale)}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('job_wanted',$i18n.locale)}}</span>
                        </div>
                        <div class="col">
                            <input type="text"
                                   name="wanted_job"
                                   class="form-control"
                                   v-model="form.wanted_job"
                                   :class="{ 'is-invalid': form.errors.has('wanted_job') }">
                        </div>
                        <has-error :form="form" field="wanted_job"></has-error>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('job_details',$i18n.locale)}}</span>
                        </div>
                        <div class="col">
                            <textarea class="form-control"
                                      v-model="form.details_job"
                                      name="details_job"
                                      :class="{ 'is-invalid': form.errors.has('details_job') }"></textarea>
                        </div>
                        <has-error :form="form" field="details_job"></has-error>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('company_name',$i18n.locale)}}</span>
                        </div>
                        <div class="col">
                            <input class="form-control"
                                   type="text"
                                   v-model="form.company_name"
                                   name="company_name"
                                   :class="{ 'is-invalid': form.errors.has('company_name') }">
                            <has-error :form="form" field="company_name"></has-error>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('job_department',$i18n.locale)}}</span>
                        </div>
                        <div class="col">

                            <select class="form-control"
                                    v-model="form.specialization_id"
                                    name="specialization_id"
                                    :class="{ 'is-invalid': form.errors.has('specialization_id') }">
                                <option value="">
                                    {{$t('chose',$i18n.locale)}}
                                </option>
                                <option v-for="specialization in specializations" :value="specialization.id">
                                    {{specialization.specialization_name}}
                                </option>

                            </select>
                            <has-error :form="form" field="specialization_id"></has-error>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('job_city',$i18n.locale)}}</span>
                        </div>
                        <div class="col">
                            <select class="form-control"
                                    name="city"
                                    v-model="form.city"
                                    :class="{ 'is-invalid': form.errors.has('city') }">
                                <option value="">
                                    {{$t('chose',$i18n.locale)}}
                                </option>
                                <option value="İstanbul">İstanbul</option>
                                <option value="Konya">Konya</option>
                                <option value="Rize">Rize</option>
                                <option value="Sakarya">Sakarya</option>
                                <option value="Samsun">Samsun</option>
                                <option value="Siirt">Siirt</option>
                                <option value="Sinop">Sinop</option>
                                <option value="Sivas">Sivas</option>
                                <option value="Tekirdağ">Tekirdağ</option>
                                <option value="Ordu">Ordu</option>
                                <option value="Niğde">Niğde</option>
                                <option value="Nevşehir">Nevşehir</option>
                                <option value="Muş">Muş</option>
                                <option value="Muğla">Muğla</option>
                                <option value="Mardin">Mardin</option>
                                <option value="Kahramanmaraş">Kahramanmaraş</option>
                                <option value="Manisa">Manisa</option>
                                <option value="Malatya">Malatya</option>
                                <option value="Kütahya">Kütahya</option>
                                <option value="Tokat">Tokat</option>
                                <option value="Trabzon">Trabzon</option>
                                <option value="Tunceli">Tunceli</option>
                                <option value="Şırnak">Şırnak</option>
                                <option value="Bartın">Bartın</option>
                                <option value="Ardahan">Ardahan</option>
                                <option value="Iğdır">Iğdır</option>
                                <option value="Yalova">Yalova</option>
                                <option value="Karabük">Karabük</option>
                                <option value="Kilis">Kilis</option>
                                <option value="Osmaniye">Osmaniye</option>
                                <option value="Batman">Batman</option>
                                <option value="Kırıkkale">Kırıkkale</option>
                                <option value="Şanlıurfa">Şanlıurfa</option>
                                <option value="Uşak">Uşak</option>
                                <option value="Van">Van</option>
                                <option value="Yozgat">Yozgat</option>
                                <option value="Zonguldak">Zonguldak</option>
                                <option value="Aksaray">Aksaray</option>
                                <option value="Bayburt">Bayburt</option>
                                <option value="Karaman">Karaman</option>
                                <option value="Düzce">Düzce</option>
                                <option value="Kocaeli">Kocaeli</option>
                                <option value="Bingöl">Bingöl</option>
                                <option value="Bitlis">Bitlis</option>
                                <option value="Bolu">Bolu</option>
                                <option value="Burdur">Burdur</option>
                                <option value="Bursa">Bursa</option>
                                <option value="Çanakkale">Çanakkale</option>
                                <option value="Çankırı">Çankırı</option>
                                <option value="Çorum">Çorum</option>
                                <option value="Bilecik">Bilecik</option>
                                <option value="Balıkesir">Balıkesir</option>
                                <option value="Adıyaman">Adıyaman</option>
                                <option value="Afyonkarahisar">Afyonkarahisar</option>
                                <option value="Ağrı">Ağrı</option>
                                <option value="Amasya">Amasya</option>
                                <option value="Ankara">Ankara</option>
                                <option value="Antalya">Antalya</option>
                                <option value="Artvin">Artvin</option>
                                <option value="Aydın">Aydın</option>
                                <option value="Denizli">Denizli</option>
                                <option value="Diyarbakır">Diyarbakır</option>
                                <option value="Isparta">Isparta</option>
                                <option value="Mersin">Mersin</option>
                                <option value="İzmir">İzmir</option>
                                <option value="Kars">Kars</option>
                                <option value="Kastamonu">Kastamonu</option>
                                <option value="Kayseri">Kayseri</option>
                                <option value="Kırklareli">Kırklareli</option>
                                <option value="Kırşehir">Kırşehir</option>
                                <option value="Hatay">Hatay</option>
                                <option value="Hakkari">Hakkari</option>
                                <option value="Edirne">Edirne</option>
                                <option value="Elazığ">Elazığ</option>
                                <option value="Erzincan">Erzincan</option>
                                <option value="Erzurum">Erzurum</option>
                                <option value="Eskişehir">Eskişehir</option>
                                <option value="Gaziantep">Gaziantep</option>
                                <option value="Giresun">Giresun</option>
                                <option value="Gümüşhane">Gümüşhane</option>
                                <option value="Adana">Adana</option>
                            </select>
                            <has-error :form="form" field="city"></has-error>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('phone_number',$i18n.locale)}}</span>
                        </div>
                        <div class="col">
                            <input class="form-control"
                                   name="phone_number"
                                   type="number"
                                   v-model="form.phone_number"
                                   :class="{ 'is-invalid': form.errors.has('phone_number') }">
                        </div>
                        <has-error :form="form" field="city"></has-error>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <span>  {{$t('email',$i18n.locale)}}</span>
                        </div>
                        <div class="col">
                            <input class="form-control"
                                   type="email"
                                   v-model="form.email"
                                   name="email"
                                   :class="{ 'is-invalid': form.errors.has('email')}"
                            >
                            <has-error :form="form" field="email"></has-error>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <button class="btn btn-outline-primary" type="submit">
                            {{$t('save',$i18n.locale)}}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "CreateOpportunity",
        data() {
            return {
                form: new Form({
                    wanted_job: '',
                    details_job: '',
                    company_name: '',
                    phone_number: '',
                    email: '',
                    specialization_id: '',
                    city: '',
                }),
                specializations: null,
            }
        },
        methods: {
            addJob() {
                this.form.post('api/user/opportunities').then(response => {
                    console.log(response.data.message)
                })
            },
            allSpecialization() {
                axios.get('api/specialization').then(response => {
                    this.specializations = response.data.specializations;
                })
            }

        }, created() {
            this.allSpecialization();
        }
    }
</script>

<style scoped>

</style>
