
<template>
    <div class="card card-border-none card-information">
        <div class="card-body">
            <div class="row mb-4">
                <div
                    class="col-md-2 d-flex justify-content-center align-items-center"
                >
                    <img
                        :src="investor.logo ? investor.logo : 'img/frame.png'"
                        :alt="investor.name"
                        class="rounded-circle single-card-logo-inf"
                    />
                </div>
                <div class="col-md-8">
                    <h4 class="dark-text">{{ investor.name }}</h4>
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
                    {{ investor.company_description }}
                </p>
                <section v-if="investor.investment_thesis">
                    
                    <h5 class="dark-text mt-3">Detalles</h5>
                <ul class="card-startup-detail" style="padding-left: 1em;">
                    <li v-if="investor.investment_thesis.maximum_valuation">
                        Valoración máxima:
                        {{ new Intl.NumberFormat().format(investor.investment_thesis.maximum_valuation) }} €
                    </li>
                
                    <li v-if="investor.investment_thesis.minimum_valuation">
                        Valoración mínima:
                        {{ new Intl.NumberFormat().format(investor.investment_thesis.minimum_valuation) }} €
                    </li>
                    <li v-if="investor.investment_thesis.minimum_ticket">
                        Ticket mínimo:
                        {{ new Intl.NumberFormat().format(investor.investment_thesis.minimum_ticket) }} €
                    </li>
                </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.countries">Países</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.countries" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.countries.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.countries.length > 3">...y {{ investor.investment_thesis.countries.length - 3 }} más</li>
                    </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.sectors">Sectores</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.sectors" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.sectors.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.sectors.length > 3">...y {{ investor.investment_thesis.sectors.length - 3 }} más</li>
                    </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.investment_stages">Etapa de inversión</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.investment_stages" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.investment_stages.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.investment_stages.length > 3">...y {{ investor.investment_thesis.investment_stages.length - 3 }} más</li>
                    </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.project_stages">Etapa de proyecto</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.project_stages" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.project_stages.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.project_stages.length > 3">...y {{ investor.investment_thesis.investment_stages.length - 3 }} más</li>
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
                                :src="investor.logo ? investor.logo : 'img/frame.png'"
                                class="rounded-circle single-card-logo-inf"
                                :alt="investor.name"
                            />
                        </div>
                        <div class="col-8">
                            <h4 class="dark-text">{{ investor.name }}</h4>
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
                                {{ investor.brand_statement }}
                            </p>
                        </div>
                        <section v-if="investor.investment_thesis">
                    
                    <h5 class="dark-text mt-3">Detalles</h5>
                <ul class="card-startup-detail" style="padding-left: 1em;">
                    <li v-if="investor.investment_thesis.maximum_valuation">
                        Valoración máxima:
                        {{ new Intl.NumberFormat().format(investor.investment_thesis.maximum_valuation) }} €
                    </li>
                
                    <li v-if="investor.investment_thesis.minimum_valuation">
                        Valoración mínima:
                        {{ new Intl.NumberFormat().format(investor.investment_thesis.minimum_valuation) }} €
                    </li>
                    <li v-if="investor.investment_thesis.minimum_ticket">
                        Ticket mínimo:
                        {{ new Intl.NumberFormat().format(investor.investment_thesis.minimum_ticket) }} €
                    </li>
                </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.countries">Países</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.countries" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.countries.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.countries.length > 3">...y {{ investor.investment_thesis.countries.length - 3 }} más</li>
                    </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.sectors">Sectores</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.sectors" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.sectors.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.sectors.length > 3">...y {{ investor.investment_thesis.sectors.length - 3 }} más</li>
                    </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.investment_stages">Etapa de inversión</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.investment_stages" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.investment_stages.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.investment_stages.length > 3">...y {{ investor.investment_thesis.investment_stages.length - 3 }} más</li>
                    </ul>
                    <h5 class="dark-text mt-2" v-if="investor.investment_thesis.project_stages">Etapa de proyecto</h5>
                    <ul class="card-startup-detail" v-if="investor.investment_thesis.project_stages" style="padding-left: 1em;">
                        <li v-for="item in investor.investment_thesis.project_stages.slice(0, 3)">
                            {{ item.es }}
                        </li>
                        <li v-if="investor.investment_thesis.project_stages.length > 3">...y {{ investor.investment_thesis.investment_stages.length - 3 }} más</li>
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
export default {
    props: ["investor"],
};
</script>
