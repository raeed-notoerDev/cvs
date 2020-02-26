<template>
    <div class="container">
        <div class="row">
            <div v-for="pr in pros" class="col-md-3 ">
                <div class="card form-group" style="height: 250px">
                    <div class="card-body">
                        {{pr.name}}
                    </div>
                </div>
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
                pros: [
                    // {name: '', prop: null, name_range: null}
                ], props: [],
                variable: '',
                idx: 0
            }
        },
        methods: {
            selectadvertises() {
                axios.get('/advertises').then(response => {
                    // this.pros = response.data.properties;
                    for (var i = 0; i < response.data.properties[0]['properties'][0].length; i++) {
                        this.idx = i + 1;
                        if (response.data.properties[0]['properties'][0][i]['name'] === response.data.properties[0]['properties'][0][this.idx]['name']) {
                            for (var j = i + 1; j < response.data.properties[0]['properties'][0].length; j++) {

                                // console.log(response.data.properties[0]['properties'][0][j]['name']);
                                if (response.data.properties[0]['properties'][0][i]['name'] === response.data.properties[0]['properties'][0][j]['name']) {
                                    // this.variable = response.data.properties[0]['properties'][0][i]['name'];
                                    this.props.push(response.data.properties[0]['properties'][0][j]['prop']);
                                    if (this.idx === j)
                                        this.props.push(response.data.properties[0]['properties'][0][i]['prop']);
                                }

                            }
                            this.pros.push({
                                name: response.data.properties[0]['properties'][0][i]['name'],
                                property: this.props
                            });
                            this.props = [];
                        }
                    }
                })
            }
        }, created() {
            this.selectadvertises();
        }
    }
</script>

<style scoped>

</style>
