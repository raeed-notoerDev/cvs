<template>
    <div class="container">
        <div class="row" v-show="showing">
            <div v-for="pr in prossee" class="col-md-3 ">
                <router-link :to="'/show-ad/'+pr.id" >
                    <div class="card form-group" @click="showing=false" style="height: 250px">
                        <div class="card-body">
                            <p @click="showing=false">
                                {{pr.name}}
                            </p>
                            <!--                        {{pr}}-->
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
        <!--            {{pros[0]['properties'][0]}}-->
        <!--            <div v-for="(p,i) in pros[0]['properties'][0]">-->
        <!--                {{pros[0]['properties'][0][i][0]['name']}}-->
        <!--                <div v-if="i === prop.properties[0].length">-->
        <!--                    <div v-if="pros[0]['properties'][0][i][0]['name']=== p[0]['name']">-->
        <!--                        {{p[1]['prop']}}-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div v-if="i < prop.properties[0].length">-->
        <!--                    <div v-if="pros[0]['properties'][0][i+1][0]['name']=== p[0]['name']">-->
        <!--                        {{p[1]['prop']}}-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->

    </div>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                pros: [],
                pross: [],
                prossee: [],
                props: [],
                variable: '',
                idx: 0,
                showing: true,
            }
        },
        methods: {
            // selectadvertises() {
            // axios.get('/advertises').then(response => {
            //     this.pross = response.data.properties;
            //     for (var k = 0; k < this.pross.length; k++) {
            //         for (var i = 0; i < this.pross[k]['properties'].length; i++) {
            //             console.log('i' + i);
            //             if (this.idx < this.pross[k]['properties'].length - 1) {
            //                 this.idx = i + 1;
            //                 console.log('idx' + this.idx);
            //             } else {
            //                 console.log('iall' + i);
            //                 for (var p = 0; p < this.pross[k]['properties'].length; p++) {
            //                     this.pros.push({
            //                         name: this.pross[k]['properties'][p]['name'],
            //                         property: this.pross[k]['properties'][p]['prop']
            //                     });
            //                     this.pross[k]['properties'].splice(p, 1);
            //                     p--;
            //                 }
            //                 break;
            //             }
            //             this.variable = this.pross[k]['properties'][i]['name'];
            //             console.log(this.variable);
            //             if (this.variable === this.pross[k]['properties'][this.idx]['name']) {
            //                 console.log(this.pross[k]['properties'].length);
            //                 for (var j = i + 1; j < this.pross[k]['properties'].length; j++) {
            //                     console.log(j);
            //                     if (this.variable === this.pross[k]['properties'][j]['name']) {
            //                         this.props.push(this.pross[k]['properties'][j]['prop']);
            //                         if (this.idx === j) {
            //                             this.props.push(this.pross[k]['properties'][i]['prop']);
            //                         }
            //                     }
            //                     if (j === this.pross[k]['properties'].length - 1) {
            //                         console.log('j' + j);
            //                         console.log('asdadadasasdadadada');
            //                         for (var z = 0; z < this.pross[k]['properties'].length; z++) {
            //                             if (this.variable === this.pross[k]['properties'][z]['name']) {
            //                                 console.log(this.pross[k]['properties'][z]['name'] + z);
            //                                 this.pross[k]['properties'].splice(z, 1);
            //                                 z--;
            //                                 i = 0;
            //                             }
            //                         }
            //                     }
            //                 }
            //                 this.pros.push({
            //                     name: this.variable,
            //                     property: this.props
            //                 });
            //                 this.props = [];
            //             }
            //         }
            //         this.idx = 0;
            //     }
            // })
            // }
            selectadvertises() {
                axios.get('/advertises').then(response => {
                    this.prossee = response.data.properties;
                })
            }, addid(id) {
                this.$router.push({path: '/details-ad/' + id, params: {id: id}});
                window.location.href = 'http://localhost:8000/details-ad/' + id;
            }
        }, created() {
            this.selectadvertises();
        }
    }
</script>

<style scoped>

</style>
