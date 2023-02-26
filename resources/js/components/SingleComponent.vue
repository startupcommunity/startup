<template>
<div class="card-container">
    <div class="card card-overlay card-border-none card-result">
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <img :src="startup.logo ? startup.logo : 'img/frame.png'" class="rounded-circle single-card-logo" :alt="startup.name">
                </div>
                <div class="col-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10 card-info">
                                <h4 class="dark-text mb-4">{{startup.name}}</h4>
                                <p class="card-resume mb-4">{{ startup.brand_statement }}</p>
                                <div class="row">
                                    <div class="col" v-if="startup.creation_date">
                                        <h6>{{startup.creation_date ? created : '' }}</h6>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-capitalize"><span>{{startup.country ? `${startup.country}, ` : '' }} </span><span>{{startup.city ? startup.city : '' }}</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <img src="img/single-logo-startup.png" class="single-type-logo">
                                <img src="img/single-logo-startup-white.png" class="single-type-logo-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="sidebar-divider">
</div>
</template>

<script>
    import moment from 'moment';
    export default {
        props: [
            'startup'
    ],
        data() {
        return {
            created: moment(this.startup.created_at).format('MMM YYYY'),
        };
    }
    }
</script>
