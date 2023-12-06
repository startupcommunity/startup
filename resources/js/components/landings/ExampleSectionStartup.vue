<template>
    <section>
        <div data-aos="fade-up" class="bg-moon py-5">
            <div class="container text-center">
                <div class="text-center">
                    <h2><strong>Conoce los últimos StartUps</strong></h2>
                    <h4>
                        Adéntrate en la comunidad StartUp y conoce a detalles
                        los pioneros de grandes ideas
                    </h4>
                    <!-- <div class="d-flex justify-content-center py-5">
                            <div class="comming-soon">PRÓXIMAMENTE</div>
                        </div> -->
                </div>
                <!-- <div class="row px-lg-5 pb-4">
                        <div class="col-lg-4">
                            <div class="card comming-card">
                                <div class="">
                                    <div class="d-flex justify-content-center">
                                        <img
                                            src="storage/images/logos/default.png"
                                            class="rounded-circle"
                                            alt=""
                                        />
                                    </div>
                                    <div class="comming-text p-4">
                                        <h4 class="text-center px-lg-5">
                                            Redes sociales para golfistas
                                        </h4>
                                        <h6 class="text-center px-lg-4 pt-2">
                                            t dt duis enim velit mollit. uis
                                            enim velit mollit. Exercitation
                                            veniam consequat sunt nostrud amet.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card comming-card">
                                <div class="">
                                    <div class="d-flex justify-content-center">
                                        <img
                                            src="storage/images/logos/default.png"
                                            class="rounded-circle"
                                            alt=""
                                        />
                                    </div>
                                    <div class="comming-text p-4">
                                        <h4 class="text-center px-lg-5">
                                            Redes sociales para Artistas
                                        </h4>
                                        <h6 class="text-center px-lg-4 pt-2">
                                            t dt duis enim velit mollit. uis
                                            enim velit mollit. Exercitation
                                            veniam consequat sunt nostrud amet.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card comming-card">
                                <div class="">
                                    <div class="d-flex justify-content-center">
                                        <img
                                            src="storage/images/logos/default.png"
                                            class="rounded-circle"
                                            alt=""
                                        />
                                    </div>
                                    <div class="comming-text p-4">
                                        <h4 class="text-center px-lg-5">
                                            Comunidad Startup de Inversionistas
                                        </h4>
                                        <h6 class="text-center px-lg-4 pt-2">
                                            t dt duis enim velit mollit. uis
                                            enim velit mollit. Exercitation
                                            veniam consequat sunt nostrud amet.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                <div class="mx-lg-5">
                    <professionals-section></professionals-section>
                </div>

                <div class="row pb-5">
                    <div class="col-12 d-flex justify-content-center">
                        <a
                            class="btn btn-primary btn-lg uppercase px-5"
                            href="{{ route('engine.register') }}"
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
                            href="#"
                            class="btn btn-outline-primary btn-lg"
                            style="min-width: 300px"
                        >
                            STARTUP O PROYECTOS
                        </a>
                    </div>
                    <div class="col-lg-4 col-xs-12 text-center">
                        <a
                            href="#"
                            class="btn btn-outline-primary btn-lg"
                            style="min-width: 300px"
                        >
                            PROFESIONALES
                        </a>
                    </div>
                    <div class="col-lg-4 col-xs-12 text-center">
                        <a
                            href="#"
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
</template>

<script>
export default {
    name: "ExampleSectionStartup",
};
</script>
