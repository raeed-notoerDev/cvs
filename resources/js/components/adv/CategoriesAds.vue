<template>
    <div class="container">
        <div class="department">
            <div class="row">
                <div class="col" v-for="(c,i) in categories">
                    <select multiple v-model="sub_category_id" @change="selectSubCategory(sub_category_id[0],i)">
                        <option v-for="category in categories[i]" :value="category.id"
                        >{{category.name}}
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CategoriesAds",
        data() {
            return {
                categories: [],
                sub_category_id: []
            }
        },
        methods: {
            ajaxSearchAxios() {
                axios.get('/member/api/category').then(response => {
                    this.categories.push(response.data);
                    //
                }).catch(error => {
                    console.log(error)
                })
            },
            selectSubCategory(id, index) {
                console.log(index);
                var i = 1;
                for (i; i < index; i++) {
                    this.categories.splice(i, 1);
                }
                // if (this.categories.length > 1 && this.categories.length > index) {
                //
                //
                // }
                axios.get('/member/api/category/' + id).then(response => {
                    this.categories.push(response.data);
                    //
                })
            },
        },
        created() {
            this.ajaxSearchAxios();
        }
    }
</script>

<style scoped>
    .department {
        border: 1px solid rgb(218, 218, 218);
    }
</style>
