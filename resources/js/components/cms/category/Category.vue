<template>
    <div class="container-fluid">
        <form class="form-group">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('add_category',$i18n.locale)}}
                    </div>
                </div>
                <div class="container">
                    <div class="row form-group" style="margin: 5px">
                        <div class="col">{{ $t('category_name',$i18n.locale)}}</div>
                        <div class="col">
                            <input type="text" v-model="name" id="category_name" name="category_name"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row form-group" v-if="categories.length>0">
                        <div class="col">
                            {{$t('sub_category',$i18n.locale)}}
                        </div>
                        <div class="col">
                            <select multiple v-model="sub_category_id" @change="selectSubCategory(sub_category_id)"
                                    class="form-control">
                                <option v-for="category in categories" :value="category.id"
                                >{{category.name}}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group" v-if="categories1.length>0">
                        <div class="col">
                            {{$t('sub_category',$i18n.locale)}}
                        </div>
                        <div class="col">
                            <select multiple v-model="sub_category_id" @change="selectSubCategory1(sub_category_id)"
                                    name="categories" class="form-control">
                                <option v-for="category in categories1" :value="category.id"
                                >{{category.name}}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group" v-if="categories2.length>0&&categories1.length>0">
                        <div class="col">
                            {{$t('sub_category',$i18n.locale)}}
                        </div>
                        <div class="col">
                            <select multiple v-model="sub_category_id" @change="selectSubCategory2(sub_category_id)"
                                    name="categories" class="form-control">
                                <option v-for="category in categories2" :value="category.id"
                                >{{category.name}}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group" v-if="categories3.length>0&&categories2.length>0">
                        <div class="col">
                            {{$t('sub_category',$i18n.locale)}}
                        </div>
                        <div class="col">
                            <select v-model="sub_category_id" @change="selectSubCategory3(sub_category_id)"
                                    name="categories" class="form-control">
                                <option v-for="category in categories3" :value="category.id"
                                >{{category.name}}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h1 style="margin:20px">
                        {{$t('properties',$i18n.locale)}}
                    </h1>
                </div>

                <form>
                    <table class="table table-bordered">
                        <thead>
                        <th>
                            {{$t('name',$i18n.locale)}}
                        </th>
                        <th>
                            {{$t('status',$i18n.locale)}}
                        </th>
                        <th>
                            {{$t('properties',$i18n.locale)}}
                        </th>
                        <th>
                            {{$t('display',$i18n.locale)}}
                        </th>
                        </thead>
                        <tr v-for="(prop,index) in props">
                            <td>
                                {{prop.name}}

                            </td>
                            <td>
                                <input type="checkbox" v-model="prop.properties[prop.name][0]['status']">
                            </td>
                            <td>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item"
                                        v-for="(i,p) in prop.properties[prop.name][1]['property']">
                                        <label :for="i+p">{{i}}</label>
                                        <input :id="i+p" type="checkbox" :value='i'
                                               v-model="prop.properties[prop.name][1]['property']" checked="false">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <input type="radio" :id="prop.name+'_text'" :name="prop.name+'_display'" value="text"
                                v-model="prop.properties[prop.name][2]['display']">
                                <label :for="prop.name+'_text'">Text Box</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" :id="prop.name+'_textarea'" :name="prop.name+'_display'" value="textarea"
                                       v-model="prop.properties[prop.name][2]['display']">
                                <label :for="prop.name+'_textarea'">Textarea</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" :id="prop.name+'_check'" :name="prop.name+'_display'" value="checkbox"
                                       v-model="prop.properties[prop.name][2]['display']">
                                <label :for="prop.name+'_check'">check Box</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" :id="prop.name+'_select'" :name="prop.name+'_display'" value="select"
                                       v-model="prop.properties[prop.name][2]['display']">
                                <label :for="prop.name+'_select'">Select Text</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" :id="prop.name+'_radio'" :name="prop.name+'_display'" value="radio"
                                       v-model="prop.properties[prop.name][2]['display']">
                                <label :for="prop.name+'_radio'">Radio Button</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                        </tr>
                    </table>


                </form>
                <div class="card-footer">
                    <div class="row">
                        <button class="btn btn-outline-success" type="submit" @click.prevent="addCategory">
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
        name: "Category",
        data() {
            return {
                categories: [],
                categories1: [],
                categories2: [],
                categories3: [],
                categories4: [],
                name: '',
                multiple: true,
                sub_category_id: [],
                properties: {
                    name: [{status: false}, {property: []}, {display: ''}],
                    advertiser: [{status: false}, {property: []}, {display: ''}],
                    price: [{status: false}, {property: []}, {display: ''}],
                }, props: []
            }
        },
        methods: {

            addCategory() {
                axios.post('/member/api/category', {
                    name: this.name,
                    category_id: this.sub_category_id[0],
                    properties: this.props
                })
                    .then(
                        this.name = '',
                        this.categories = [],
                        this.categories1 = [],
                        this.categories2 = [],
                        this.categories3 = [],
                        this.categories4 = [],
                        this.selectCategory(),
                    )
            },
            selectCategory() {
                axios.get('/member/api/category').then(response => {
                    this.categories = response.data;
                    //
                })
            },
            selectSubCategory(id) {
                console.log('asd');
                axios.get('/member/api/category/' + id).then(response => {
                    this.categories1 = response.data;
                    //
                })
            },
            selectSubCategory1(id) {
                console.log('asd');
                axios.get('/member/api/category/' + id).then(response => {
                    this.categories2 = response.data;
                    //
                })
            }, selectSubCategory2(id) {
                console.log('asd');
                axios.get('/member/api/category/' + id).then(response => {
                    this.categories3 = response.data;
                    //
                })
            }, selectSubCategory3(id) {
                console.log('asd');
                axios.get('/member/api/category/' + id).then(response => {
                    this.categories4 = response.data;
                    //
                })
            }, selectProperties() {
                axios.get('/member/api/prop').then(response => {
                    this.props = response.data.properties;
                    // this.properties = response.data.properties;
                })
            }
        }, created() {
            this.selectCategory();
            this.selectProperties();
        }
    }
</script>

<style scoped>

</style>
