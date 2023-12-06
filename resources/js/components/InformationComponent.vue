<template>
    <div class="card card-border-none card-information">
        <div class="card-body p-4">
            <div class="row mb-4">
                <div
                    class="col-md-2 d-flex justify-content-center align-items-center"
                >
                    <img
                        :src="startup.logo ? startup.logo : 'img/frame.png'"
                        class="aspect-square w-[60px] h-[60px] max-w-[60px] max-h-[60px] rounded-full object-center object-contain border-2 border-blue-400"
                        :alt="startup.name"
                    />
                </div>
                <div class="col-md-8">
                    <h4 class="dark-text">{{ startup.name }}</h4>
                    <h6 class="dark-text">
                        {{ startup.sector ? startup.sector.es : "" }}
                    </h6>
                </div>
                <div class="col-md-2">
                    <img
                        src="img/single-logo-startup.png"
                        class="single-type-logo"
                    />
                </div>
            </div>

            <div class="row">
                <p class="card-description">
                    {{ startup.brand_statement }}
                </p>
                <section>
                    <h5 class="dark-text mt-3">Detalles</h5>
                    <ul class="card-startup-detail">
                        <li>
                            Web:
                            <span v-if="startup.web">{{ startup.web }}</span>
                            <span v-else>no web</span>
                        </li>
                        <li v-if="startup.sector">
                            Sector: {{ startup.sector.es || "no info" }}
                        </li>
                        <li v-if="startup.stage">
                            Stage: {{ startup.stage.es || "no info" }}
                        </li>
                        <li v-if="startup.investment_stage">
                            Investment Stage:
                            {{ startup.investment_stage.es || "no info" }}
                        </li>
                        <li v-if="startup.business_model">
                            Business Model:
                            {{ startup.business_model.es || "no info" }}
                        </li>
                    </ul>
                </section>
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
                                :src="
                                    startup.logo
                                        ? startup.logo
                                        : 'img/frame.png'
                                "
                                class="rounded-circle single-card-logo-inf"
                                :alt="startup.name"
                            />
                        </div>
                        <div class="col-8">
                            <h4 class="dark-text">{{ startup.name }}</h4>
                            <h6 class="dark-text">
                                {{ startup.sector ? startup.sector.es : "" }}
                            </h6>
                        </div>
                        <div class="col-2">
                            <img
                                src="img/single-logo-startup.png"
                                class="single-type-logo"
                            />
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col">
                            <h6 class="dark-text">
                                {{ startup.creation_date ? created : "" }}
                            </h6>
                        </div>
                        <div class="col">
                            <h6 class="text-capitalize dark-text">
                                <span
                                    >{{
                                        startup.country
                                            ? `${startup.country}, `
                                            : ""
                                    }} </span
                                ><span>{{
                                    startup.city ? startup.city : ""
                                }}</span>
                            </h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col px-4">
                            <p class="card-description">
                                {{ startup.brand_statement }}
                            </p>
                        </div>
                        <section>
                            <h5 class="dark-text mt-3 px-3">Detalles</h5>
                            <ul class="card-startup-detail">
                                <li>
                                    Web:
                                    <span v-if="startup.web">{{
                                        startup.web
                                    }}</span>
                                    <span v-else>no web</span>
                                </li>
                                <li v-if="startup.sector">
                                    Sector: {{ startup.sector.es || "no info" }}
                                </li>
                                <li v-if="startup.stage">
                                    Stage: {{ startup.stage.es || "no info" }}
                                </li>
                                <li v-if="startup.investment_stage">
                                    Investment Stage:
                                    {{
                                        startup.investment_stage.es || "no info"
                                    }}
                                </li>
                                <li v-if="startup.business_model">
                                    Business Model:
                                    {{ startup.business_model.es || "no info" }}
                                </li>
                            </ul>
                        </section>
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
import moment from "moment";
export default {
    props: ["startup"],
    data() {
        return {
            created: moment(this.startup.created_at).format("MMM YYYY"),
        };
    },
};
</script>
