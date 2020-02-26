<template>
    <div class="container">
        <form class="form-group" @submit.prevent="addProperties">
            <div class="row form-group">
                <div class="col">
                    <h3>
                        {{$t('name',$i18n.locale)}}
                    </h3>
                </div>
                <div class="col">
                    <input type="text" class="form-control" v-model="name">
                </div>
            </div>
            <div class="row form-group">
                <div class="col">
                    <h3>
                        {{$t('properties',$i18n.locale)}}
                    </h3>
                </div>
                <div class="col">
                    <input type="text" class="form-control" @keydown.enter="characterInput(tag)" v-model="tag">
                </div>
            </div>
            <div class="row form-group">
                <h3>     <span v-for="(prop, key) in tags" class=" badge badge-danger"
                               style="margin: 1px;padding: 5px ;">{{prop}}
                        <span class=" border border-light" @click="removeTag(key)"
                              style="  cursor:pointer;  padding:  5px ;">X</span>
                        </span>
                </h3>
            </div>
            <div class="row form-group">
                <button class="form-control btn btn-outline-success" type="submit">{{$t('save',$i18n.locale)}}</button>
            </div>
        </form>
    </div>

</template>

<script>
    export default {
        name: "Property",
        data() {
            return {
                tags: [],
                tag: '',
                name: '',
            }
        },
        methods: {
            characterInput(key) {
                this.tags.push(key);
                this.tag = '';
                console.log(this.tags);
            },
            removeTag(id) {
                this.tags.splice(id, 1);
            },
            addProperties() {
                axios.post('/member/api/prop', {
                    name: this.name,
                    properties: this.tags
                })
            }
        }
    }
</script>

<style scoped>

</style>
