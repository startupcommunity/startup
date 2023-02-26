<template>
    <div class="card card-border-none card-information">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-2 d-flex justify-content-center align-items-center">
                    <img
                        :src="professional.logo ? professional.logo : 'img/frame.png'"
                        class="rounded-circle single-card-logo-inf"
                        :alt="professional.name"
                    />
                </div>
                <div class="col-md-8">
                    <h4 class="dark-text">{{ professional.name }}</h4>
                </div>
                <div class="col-md-2">
                    <!--<img
                        src="img/single-logo-startup.png"
                        class="single-type-logo"
                    />
                    -->
                </div>
            </div>
            <div class="row">
                <p class="card-description">
                    {{ professional.company_description }}
                </p>
            </div>
            <div class="row mt-3">
                <div class="col-12 d-flex justify-content-center">
                    <a
                        href="https://engine.thestartup-community.com/register/"
                        target="_blank"
                        class="btn btn-primary btn-lg"
                        style="min-width: 200px"
                    >
                        CONTACTAR
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade d-lg-none"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        data-bs-backdrop="false"
        >
        <div
            class="modal-dialog modal-dialog-centered modal-dialog-scrollable d-block d-lg-none"
            style="padding: 3px; margin-top: 190px"
        >
            <div class="modal-content shadow-sm" style="border: none">
                <div>
                    <i class="bi bi-arrow-left px-2 dark-text fs-3" data-bs-dismiss="modal"
                        aria-label="Close"></i>
                </div>
                <div class="modal-body">
                    <div class="row mb-4 align-items-center">
                        <div class="col-2 d-flex justify-content-center">
                            <img
                        :src="professional.logo ? professional.logo : 'img/frame.png'"
                        class="rounded-circle single-card-logo-inf"
                        :alt="professional.name"
                    />
                        </div>
                        <div class="col-8">
                            <h4 class="dark-text">{{ professional.name }}</h4>
                        </div>
                        <div class="col-2">
                            <!-- <img
                                src="img/single-logo-startup.png"
                                class="single-type-logo"
                            /> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col px-4">
                            <p class="card-description">
                                {{professional.company_description }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3 pb-4">
                        <div class="col-12 d-flex justify-content-center">
                            <a
                                href="https://engine.thestartup-community.com/register/"
                                target="_blank"
                                class="btn btn-primary btn-lg"
                                style="min-width: 200px"
                            >
                                CONTACTAR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["professional"],
};
</script>
