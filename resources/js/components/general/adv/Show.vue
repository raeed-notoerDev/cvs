<template>
    <div class="container">
        <div v-for="p in pros">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <table class="table ">
                        <td>
                            <strong>
                                {{p.name}}:
                            </strong>
                        </td>
                        <td v-if="Array.isArray(p.property)" v-for="pp in p.property">
                            {{pp}}
                        </td>
                        <td v-if="!Array.isArray(p.property)">
                            {{p.property}}
                        </td>
                    </table>

                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Show",
        data() {
            return {
                pros: [],
                pross: [],
                props: [],
                variable: '',
                idx: 0,
            }
        },
        methods: {
            selectAdv() {
                axios.get('/details-ad/' + this.$route.params.id).then(response => {
                    this.pross = response.data.properties;
                    for (var i = 0; i < this.pross[0]['properties'].length; i++) {
                        console.log('i' + i);
                        if (this.idx < this.pross[0]['properties'].length - 1) {
                            this.idx = i + 1;
                            console.log('idx' + this.idx);
                        } else {
                            console.log('iall' + i);
                            for (var p = 0; p < this.pross[0]['properties'].length; p++) {
                                this.pros.push({
                                    name: this.pross[0]['properties'][p]['name'],
                                    property: this.pross[0]['properties'][p]['prop']
                                });
                                this.pross[0]['properties'].splice(p, 1);
                                p--;
                            }
                            break;
                        }
                        this.variable = this.pross[0]['properties'][i]['name'];
                        console.log(this.variable);
                        if (this.variable === this.pross[0]['properties'][this.idx]['name']) {
                            console.log(this.pross[0]['properties'].length);
                            for (var j = i + 1; j < this.pross[0]['properties'].length; j++) {
                                console.log(j);
                                if (this.variable === this.pross[0]['properties'][j]['name']) {
                                    this.props.push(this.pross[0]['properties'][j]['prop']);
                                    if (this.idx === j) {
                                        this.props.push(this.pross[0]['properties'][i]['prop']);
                                    }
                                }
                                if (j === this.pross[0]['properties'].length - 1) {
                                    console.log('j' + j);
                                    console.log('asdadadasasdadadada');
                                    for (var z = 0; z < this.pross[0]['properties'].length; z++) {
                                        if (this.variable === this.pross[0]['properties'][z]['name']) {
                                            console.log(this.pross[0]['properties'][z]['name'] + z);
                                            this.pross[0]['properties'].splice(z, 1);
                                            z--;
                                            i = 0;
                                        }
                                    }
                                }
                            }
                            this.pros.push({
                                name: this.variable,
                                property: this.props
                            });
                            this.props = [];
                        }
                    }
                })
            },
            selectadvertises() {
                axios.get('/details-ad/' + this.$route.params.id).then(response => {
                    this.pross = response.data.properties;

                })
            }
        },

        created() {
            this.selectAdv();
        }
    }
</script>

<style scoped>

</style>
