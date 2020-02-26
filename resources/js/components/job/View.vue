<template>
    <div class="container-fluid">
        <div class="header">
            <div class="container">
                <div class="row form-group">
                    <div class="col">
                        <button class=" btn btn-info form-control">
                            <strong> {{$t('opportunities_job',$i18n.locale)}}</strong>
                        </button>
                    </div>
                    <div class="col">
                        <button class=" btn btn-secondary form-control">
                            <strong> {{$t('cv',$i18n.locale)}}</strong>
                        </button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <button class=" btn btn-outline-info form-control">
                            <strong> {{$t('opportunities_job',$i18n.locale)}}</strong>
                        </button>
                    </div>
                    <div class="col">
                        <button class=" btn btn-outline-info form-control">
                            <strong> {{$t('add_job',$i18n.locale)}}</strong>
                        </button>
                    </div>
                    <div class="col">
                        <button class=" btn btn-outline-info form-control">
                            <strong> {{$t('add_cv',$i18n.locale)}}</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="row title ">
                <h1>{{$t('wanted',$i18n.locale)}} {{opportunity.wanted_Job}} {{$t('to_company',$i18n.locale)}}
                    <b class="text-danger">{{opportunity.company_name}}</b> {{$t('in',$i18n.locale)}} <span
                        class="text-danger">{{opportunity.city}}</span></h1>
            </div>
            <div class="row views ">
                <div class="col-md-1">
                    <b class="fas fa-eye "></b>
                </div>
                <div class="col-md-1">
                    <p> {{$t('views',$i18n.locale)}} </p>
                </div>
                <div class="col-md-1">
                    <b>:12345</b>
                </div>
            </div>
            <div class="row views ">
                <div class="col-md-1">
                    <b class="fas fa-comment-alt "></b>
                </div>
                <div class="col-md-1">
                    <p> {{$t('comments',$i18n.locale)}} </p>
                </div>
                <div class="col-md-1">
                    <b>:12345</b>
                </div>
            </div>
            <div class="row date ">
                <div class="col-md-1">
                    <b class="fas fa-calendar-alt "></b>
                </div>
                <div class="col-md-2">
                    <p class="text-right"> {{$t('date_publish',$i18n.locale)}} </p>
                </div>
                <div class="col-md-1">
                    <b>:12345</b>
                </div>
            </div>
            <div class="row form-group">
                <h3> {{opportunity.details_Job}}</h3>
            </div>
            <div class=" comment">
                <div class="card-header">
                    <div class="row">
                        <h3>
                            {{$t('comments',$i18n.locale)}}
                        </h3>
                    </div>

                </div>
                <div class="card form-group">
                    <div class=" card-body input-group">
                        <div class="row">
                            <div class="col comment-profile">
                                <img style="width:200px;height: 120px" class="img-fluid img-thumbnail rounded-circle "
                                     src="/images/Avatar.png">
                                <p class="text-center">
                                    <b>
                                        Raeed
                                    </b>
                                </p>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <p class="form-group">
                                            asdad
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">1</div>
                            <div class="col">2</div>
                            <div class="col">3</div>
                            <div class="col">4</div>
                        </div>
                    </div>
                    <div class=" card-body input-group">
                        <div class="">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col comment-profile">
                                    <img style="width:350px;height: 120px"
                                         class="img-fluid img-thumbnail rounded-circle "
                                         src="/images/Avatar.png">
                                    <p class="text-center">
                                        <b>
                                            Raeed
                                        </b>
                                    </p>
                                </div>
                                <div class="col">
                                    <div class="container">
                                        <div class="row ">
                                            <p class="form-group">
                                                asdad
                                            </p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "View",
        data() {
            return {
                opportunity: {}
            }
        },
        methods: {
            getOpportunity() {
                axios.get('/api/user/opportunity/' + this.$route.params.id)
                    .then(response => {
                        this.opportunity = response.data.opportunity;
                        console.log(this.opportunity);
                    })
            }
        }, created() {
            this.getOpportunity();
        }
    }
</script>

<style scoped>
    .commentbody {
        background-color: #f7f7f7;
    }

    .comment-profile {
        background-color: #f7f7f7;
    }

    /*.commentbody .tick {*/
    /*    transform: rotate(45deg);*/
    /*    right: 0px;*/
    /*    content: '';*/
    /*    display: block;*/
    /*    position: absolute;*/
    /*    width: 20px;*/
    /*    height: 20px;*/
    /*    border-top: 1px solid rgba(0, 0, 0, 0.1);*/
    /*    border-right: 1px solid rgba(0, 0, 0, 0.1);*/
    /*    z-index: 2;*/
    /*    top: 40px;*/
    /*    background-color: #FFF435;*/
    /*}*/
</style>
