<template>
    <div class="container-fluid ">
        <form class="myform">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>{{$t('name',$i18n.locale)}}</td>
                    <td>
                        <input type="text" class="form-control" v-model="pro[0]['prop']">
                    </td>
                </tr>
                <tr>
                    <td>{{$t('price',$i18n.locale)}}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" v-model="pro[1]['prop']">
                            </div>
                            <div class="col">
                                <select type="text" class="form-control" v-model="pro[3]['prop']">
                                    <option>الرجاءالاختيار</option>
                                </select>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>{{$t('description',$i18n.locale)}}</td>
                    <td>
                        <textarea class="form-control" v-model="pro[2]['prop']"></textarea>
                    </td>
                </tr>
                </tbody>
                <tbody v-for="(view,index) in views[0]">
                <tr class="border-dark">
                    <td>
                        <h2> {{$t(view.name,$i18n.locale)}}</h2>
                    </td>
                    <td v-if="view.properties[view.name][2]['display']==='checkbox'">
                        <div class="row">
                            <div class="col" v-for="(v,i) in view.properties[view.name][1]['property']">
                                <label :for="v">{{v}}</label>
                                <!--                            <input class="" type="checkbox" :id="v" :value="v"-->
                                <!--                                   v-model="props[0][index]['properties'][view.name][1]['property']">-->
                                <input class="" type="checkbox" :id="v"
                                       @change="addToList(v,view.name,'')">
                                <!--                            v-model="pro[0]['pros']"-->
                            </div>
                        </div>
                    </td>
                    <td v-else-if="view.properties[view.name][2]['display']==='radio'">
                        <div class="row">
                            <div class="col" v-for="(v,i) in view.properties[view.name][1]['property']">
                                <label :for="v">{{v}}</label>
                                <input class="" type="radio" :id="v"
                                       :name="view.properties[view.name][1]['property'][0]"
                                       :value='v'
                                       @change="addToList(v,view.name,view.properties[view.name][1]['property'][0])">
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <button class="btn btn-outline-success" style="margin: auto" @click.prevent="addAdv">
                    {{$t('save',$i18n.locale)}}
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "Create",
        data() {
            return {
                views: [],
                pro: [
                    {name: 'name', prop: '', name_range: ''},
                    {name: 'price', prop: '', name_range: ''},
                    {name: 'description', prop: '', name_range: ''},
                    {name: 'currency', prop: '', name_range: ''},
                ],
                props: [],
            }
        },
        methods: {
            addToList(value, value_main, range) {
                if (document.getElementById(value).type === 'radio') {
                    var j = this.pro.length - 1;
                    while (j > 0) {
                        if (this.pro[j]['name_range'] === document.getElementById(value).name) {
                            this.pro.splice(j, 1);
                        }
                        --j;
                    }
                    this.pro.push({name: value_main, prop: value, name_range: range});
                }
                if (document.getElementById(value).type === 'checkbox') {
                    var i = this.pro.length - 1;
                    while (i > 0) {
                        if (this.pro[i]['name'] === value_main && this.pro[i]['prop'] === value) {
                            this.pro.splice(i, 1);
                        }
                        --i;
                    }
                    if (event.target.checked)
                        this.pro.push({name: value_main, prop: value, name_range: ''});
                }
                if (document.getElementById(value).type === 'text') {

                }

                if (document.getElementById(value).type === 'checkbox') {
                    var i = this.pro.length - 1;
                    while (i > 0) {
                        if (this.pro[i]['name'] === value_main && this.pro[i]['prop'] === value) {
                            this.pro.splice(i, 1);
                        }
                        --i;
                    }
                    if (event.target.checked)
                        this.pro.push({name: value_main, prop: value, name_range: ''});
                }
            }
            ,
            selectViews() {
                var i = 0;
                var j = 0;
                axios.get('/ad/create/' + 17).then(response => {
                    this.views = response.data.properties;
                    this.props = response.data.properties;
                });
            }
            ,
            addAdv() {
                axios.post('/ad/create', {
                    category_id: 17,
                    properties: this.pro,
                    name: this.pro[0]['prop']
                }).then(response => {
                    console.log(response.data.data)
                })
            }
        }
        ,
        created() {
            this.selectViews();
        }
    }
</script>

<style scoped>

</style>
