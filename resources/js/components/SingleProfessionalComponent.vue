<template>
<div class="card-container">
    <div class="card card-overlay card-border-none card-result">
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <img :src="professional.logo ? professional.logo : 'img/frame.png'" class="rounded-circle single-card-logo" :alt="professional.name">
                </div>
                <div class="col-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10 card-info">
                                <h4 class="dark-text mb-4"> {{ professional.name }}</h4>
                                <p class="card-resume mb-4">{{ professional.company_description }}</p>
                            </div>
                            <!--<div class="col-2">
                                <img src="img/single-logo-startup.png" class="single-type-logo">
                                <img src="img/single-logo-startup-white.png" class="single-type-logo-white">
                            </div>
                            -->
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
    export default {
        props: [
            'professional'
        ]
    }
</script>
