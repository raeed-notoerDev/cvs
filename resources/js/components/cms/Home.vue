<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group-item ">
                    <h3>
                        <p class="text-center">
                            {{$t('main_menu',$i18n.locale)}}
                        </p>
                    </h3>
                </div>

                <div class="row" style="height: 5px"></div>
                <div class="list-group" id="list-tab" role="tablist">

                    <router-link class="list-group-item list-group-item-action active" id="list-home-list"
                                 data-toggle="list"
                                 to="/home" role="tab" aria-controls="home">
                        <h3>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="col">
                                    {{$t('home',$i18n.locale)}}
                                </div>
                            </div>
                        </h3>
                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-profile-list"
                                 data-toggle="list"
                                 to="/member-property" role="tab" aria-controls="profile">
                        <h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="col">
                                    {{$t('create-property',$i18n.locale)}}
                                </div>
                            </div>
                        </h4>
                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-ad-list"
                                 data-toggle="list"
                                 to="/member-category" role="tab" aria-controls="profile">
                        <h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="col">
                                    {{$t('create-category',$i18n.locale)}}
                                </div>
                            </div>
                        </h4>
                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-messages-list"
                                 data-toggle="list"
                                 to="/notifications" role="tab" aria-controls="messages">
                        <h3>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col">
                                    {{$t('incoming_mail',$i18n.locale)}}
                                </div>
                            </div>
                        </h3>

                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-settings-list"
                                 data-toggle="list"
                                 to="/jobs" role="tab" aria-controls="settings">

                        <h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="col">
                                    {{$t('opportunities_job',$i18n.locale)}}
                                </div>
                            </div>
                        </h4>

                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-cv-list" data-toggle="list"
                                 to="/cvs" role="tab" aria-controls="settings">
                        <h3>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <div class="col">
                                    {{$t('cv',$i18n.locale)}}
                                </div>
                            </div>
                        </h3>

                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-password-list"
                                 data-toggle="list"
                                 to="/change-password" role="tab" aria-controls="password">

                        <h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fas fa-lock-open"></i>

                                </div>

                                <div class="col">
                                    {{$t('change_password',$i18n.locale)}}
                                </div>
                            </div>
                        </h5>
                    </router-link>
                    <router-link class="list-group-item list-group-item-action" id="list-financial-list"
                                 data-toggle="list"
                                 to="/" role="tab" aria-controls="password">

                        <h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="col">
                                    {{$t('financial_statements',$i18n.locale)}}
                                </div>
                            </div>
                        </h5>
                    </router-link>
                </div>
            </div>
            <div class="col-md-9">
                <router-view></router-view>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Home"
    }
</script>

<style scoped>
    * {
        font-family: 'Almarai', 'Raleway';
    }
</style>
