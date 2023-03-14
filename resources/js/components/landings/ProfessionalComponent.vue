<template>
    <div>
        <section>
            <div class="container-fluid px-0 d-none d-md-block align-center">
                <div class="row position-relative align-items-center">
                    <div class="col-lg-12">
                        <img
                            src="img/backgrounds/professional_bg.png"
                            class="float-end"
                        />
                    </div>
                    <div
                        class="col-lg-12 position-absolute text-center py-lg-5"
                        data-aos="flip-right"
                        data-aos-duration="1200"
                    >
                        <img
                            src="img/backgrounds/investor_space.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>

                    <div class="col-lg-12 position-absolute text-center">
                        <h1 class="pb-4">
                            Podrás formar parte de la<br />
                            tripulación que desees
                        </h1>
                        <h3>¿Cuál puede ser tu destino favorito?</h3>
                        <h5>
                            Perteneciendo a la comunidad StartUp como
                            profesional, te conviertes en pieza clave<br />
                            para llegar a otros universos.
                        </h5>
                        <h2 class="pt-4">
                            Decide en cual tripulación encajas mejor
                        </h2>
                        <div class="container">
                            <search-component
                                :selectedOpt="selectedOpt"
                            ></search-component>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid d-block d-md-none py-4">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <h1 class="">
                            Podrás formar parte de la tripulación que desees
                        </h1>
                        <h3>¿Cuál puede ser tu destino favorito?</h3>
                        <h5>
                            Perteneciendo a la comunidad StartUp como
                            profesional, te conviertes en pieza clave para
                            llegar a otros universos.
                        </h5>
                        <img
                            src="img/startup/rocket.png"
                            class="img-fluid"
                            alt=""
                        />
                        <h2 class="pt-4">
                            Decide en cual tripulación encajas mejor
                        </h2>
                        <div class="container">
                            <search-component
                                :selectedOpt="selectedOpt"
                            ></search-component>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section class="frame-blue py-4">
            <div class="container px-lg-5">
                <div class="row pb-4 align-items-center px-lg-5 mx-lg-5">
                    <h2 class="text-center mb-5">
                        ¿Qué papel juega un profesional<br />
                        experto en la comunidad StartUp?
                    </h2>
                    <div class="col-lg-2 d-flex justify-content-center">
                        <img
                            src="img/professional/col-1.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-10 p-4">
                        <h6 class="text-justify">
                            Llamamos profesionales expertos a las personas que
                            poseen conocimientos y dominios de un área en
                            específica. Ya sea la parte investigadora,
                            desarrolladora, tester, marketing, o cualquier otra
                            tarea que se necesite desarrollar en una StartUp.
                        </h6>
                    </div>
                </div>
                <div class="row pb-4 align-items-center px-lg-5 mx-lg-5">
                    <div
                        class="col-lg-2 d-flex justify-content-center order-lg-1"
                    >
                        <img
                            src="img/professional/col-2.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-10 p-4">
                        <h6 class="text-justify order-lg-2">
                            Pertenecer a la tripulación de StartUp Community
                            como profesional, te facilita visibilidad frente a
                            aquellas empresas que necesitan gente como tú. Con
                            buenos tripulantes, el viaje puede ser una
                            experiencia única.
                        </h6>
                    </div>
                </div>
                <div class="row pb-4 align-items-center px-lg-5 mx-lg-5">
                    <div class="col-lg-2 d-flex justify-content-center">
                        <img
                            src="img/professional/col-3.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-10 p-4">
                        <h6 class="text-justify">
                            El éxito de la innovación va de la mano de personas,
                            el conocimiento es poder y el hacer es mover. El
                            viaje hacia otros universos puede ser más o menos
                            largo y siempre genera grandes dosis de crecimiento.
                            Escoge dónde te quieres ubicar en función del
                            destino que desees.
                        </h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <!-- startups -->
        <section>
            <div data-aos="fade-up" class="bg-moon py-5">
                <div class="container text-center">
                    <div class="text-center">
                        <h2><strong>Conoce las ultimas StartUps</strong></h2>
                        <h4>
                            Adéntrate en la comunidad StartUp y conoce en
                            detalle los pioneros de grandes ideas
                        </h4>
                    </div>
                    <div class="mx-lg-5 py-5">
                        <Startup />
                    </div>
                    <div class="row pb-5">
                        <div class="col-12 d-flex justify-content-center">
                            <a
                                class="btn btn-primary btn-lg uppercase px-5"
                                @click.stop="goToRegister"
                                target="_blank"
                            >
                                ¡Registrarme!
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container d-none d-md-block px-5">
                    <div
                        class="row align-items-lg-end align-items-sm-start"
                        style="height: 40%"
                    >
                        <div class="col-lg-4 col-xs-12 text-center">
                            <a
                                :href="this.startupRoute"
                                class="btn btn-outline-primary btn-lg"
                                style="min-width: 300px"
                            >
                                STARTUP O PROYECTOS
                            </a>
                        </div>
                        <div class="col-lg-4 col-xs-12 text-center">
                            <a
                                :href="this.professionalRoute"
                                class="btn btn-outline-primary btn-lg"
                                style="min-width: 300px"
                            >
                                PROFESIONALES
                            </a>
                        </div>
                        <div class="col-lg-4 col-xs-12 text-center">
                            <a
                                :href="this.investorRoute"
                                class="btn btn-outline-primary btn-lg"
                                style="min-width: 300px"
                            >
                                INVERSOR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /startups -->
    </div>
</template>

<script>
import Startup from "./components/Startup.vue";

export default {
    name: "ProfessionalComponent",
    components: { Startup },
    data() {
        return {
            startupRoute: "startup",
            investorRoute: "investor",
            professionalRoute: "professional",
            selectedOpt: "professionals",
        };
    },
    methods: {
        goToRegister() {
            window.location.href = route("engine.register");
        },
    },
};
</script>
