<template>
    <div>
        <!-- ======= Main Section Web======= -->
        <section>
            <div class="container-fluid pt-5 d-none d-lg-block">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <img
                            src="img/backgrounds/astro_bg_home.png"
                            class="img-fluid"
                            data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-duration="5000"
                            data-aos-offset="0"
                        />
                    </div>
                    <div
                        class="col-12 pt-5 d-flex justify-content-center position-absolute"
                        data-aos="zoom-out"
                        data-aos-duration="3000"
                    >
                        <img
                            src="img/astro_rocket_home.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>
                    <div class="col-12 text-center position-absolute">
                        <h1>Bienvenido a un Universo <br />de Alto Valor</h1>
                        <h3>
                            La comunidad que conecta Startups, Profesionales e
                            Inversión
                        </h3>
                        <h5 class="font-thin leading-6">
                            Nuestra misión consiste en aportar la conexión para
                            que puedas desarrollar<br />
                            <strong class="font-bold">proyectos únicos</strong>
                            que te permitan alcanzar
                            <strong class="font-bold">nuevos universos.</strong>
                        </h5>
                        <h2 class="pt-5">¡Somos la Comunidad StartUp!</h2>
                        <div class="container">
                            <search-component
                                :selectedOpt="selectedOpt"
                            ></search-component>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Section Web -->
        <!-- Main Section Movil -->
        <section class="d-block d-lg-none my-4">
            <div class="container-fluid">
                <div class="row mx-auto text-center">
                    <div class="col-12">
                        <h1>Bienvenido a un Universo<br />de Alto Valor</h1>
                        <h3>
                            <strong
                                >La comunidad que conecta Startups,
                                Profesionales e Inversión</strong
                            >
                        </h3>
                        <h5>
                            Nuestra misión consiste en aportar la conexión para
                            que puedas desarrollar
                            <strong>proyectos únicos </strong>que te permitan
                            alcanzar <strong>nuevos universos</strong>.
                        </h5>
                    </div>
                    <div
                        class="col-12"
                        data-aos="zoom-out"
                        data-aos-duration="3000"
                    >
                        <img src="img/backgrounds/home_movil_main.png" alt="" />
                    </div>
                    <div class="col-12">
                        <div class="container-fluid px-0">
                            <h2>¡Somos la Comunidad StartUp!</h2>
                            <search-component
                                :selectedOpt="selectedOpt"
                            ></search-component>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End MainSection -->

        <div class="container">
            <div class="row px-5">
                <div class="d-lines"></div>
            </div>
        </div>

        <!-- ======= Features Section ======= -->
        <section class="bg-planet-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mx-lg-5 px-lg-5">
                            <div class="text-center" data-aos="fade-zoom-in">
                                <h2>¡Prepárate para despegar!</h2>
                                <h5 class="mx-lg-5 px-lg-5 font-thin leading-6">
                                    Conoce los beneficios dentro de StartUp
                                    Community para que puedas cambiar el
                                    <span class="font-bold">
                                        cambiar el mundo.
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits Web-->
            <div class="container d-none d-md-block">
                <div class="row">
                    <div class="col-12 pt-2 pb-5">
                        <div
                            class="row"
                            data-aos="zoom-in"
                            data-aos-duration="1000"
                        >
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="home-f-icon text-center">
                                    <img
                                        src="img/home/col_1.png"
                                        alt="big-bag"
                                        class="mx-auto"
                                    />
                                </div>
                                <div class="bg-app-blue-1 p-2 h-[9rem]">
                                    <h6 class="font-bold">El BigBang</h6>
                                    <p class="font-thin">
                                        Los inicios son difíciles y a veces
                                        explosivos, siempre es bueno tener
                                        apoyo.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="home-f-icon text-center">
                                    <img
                                        src="img/home/col_2.png"
                                        alt="estrellas"
                                        class="mx-auto"
                                    />
                                </div>
                                <div class="bg-app-blue-1 p-2 h-[9rem]">
                                    <h6 class="font-bold">
                                        Muestra tu estrella
                                    </h6>
                                    <p class="font-thin">
                                        Da visibilidad a tu proyecto o StartUp
                                        para su proyección y difusión.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="home-f-icon text-center">
                                    <img
                                        src="img/home/col_3.png"
                                        alt="civilizaciones"
                                        class="mx-auto"
                                    />
                                </div>
                                <div class="bg-app-blue-1 p-2 h-[9rem]">
                                    <h6 class="font-bold">
                                        Conoce otras civilizaciones
                                    </h6>
                                    <p class="font-thin">
                                        Más emprendedores, profesionales
                                        expertos e inversores quieren conocerte.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="home-f-icon text-center">
                                    <img
                                        src="img/home/col_4.png"
                                        alt="universos"
                                        class="mx-auto"
                                    />
                                </div>
                                <div class="bg-app-blue-1 p-2 h-[9rem]">
                                    <h6 class="font-bold">
                                        Explora nuevos universos
                                    </h6>
                                    <p class="font-thin">
                                        Conoce proyectos que te puedan guiar,
                                        permitan participar o aportar valor.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="home-f-icon text-center">
                                    <img
                                        src="img/home/col_5.png"
                                        alt="ciencia"
                                        class="mx-auto"
                                    />
                                </div>
                                <div class="bg-app-blue-1 p-2 h-[9rem]">
                                    <h6 class="font-bold">
                                        Cuestión de Fe y Ciencia
                                    </h6>
                                    <p class="font-thin">
                                        Creemos en el poder de la innovación,
                                        investigación, desarrollo y compartir la
                                        experiencia.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="home-f-icon text-center">
                                    <img
                                        src="img/home/col_6.png"
                                        alt="Hipervelocidad"
                                        class="mx-auto"
                                    />
                                </div>
                                <div class="bg-app-blue-1 p-2 h-[9rem]">
                                    <h6 class="font-bold">Hipervelocidad</h6>
                                    <p class="font-thin">
                                        Acelera y traza la ruta de tu StartUp
                                        con servicios premium a medida.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Benefits Web -->

            <!-- Benefits Movil -->
            <div class="container-fluid d-block d-md-none py-4 px-auto d-flex">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-12 benefit-item mb-3 d-flex">
                                <img
                                    src="img/home/col_1.png"
                                    class="benefit-icon"
                                />
                                <div class="benefit-text">
                                    <h3 class="mb-0">
                                        <strong>El Big Bang</strong>
                                    </h3>
                                    <p>
                                        Los inicios son difíciles y a veces
                                        exdivlosivos, siempre es bueno tener
                                        apoyo.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 benefit-item mb-3 d-flex">
                                <img
                                    src="img/home/col_2.png"
                                    class="benefit-icon"
                                />
                                <div class="benefit-text">
                                    <h3 class="mb-1">
                                        <strong>Muestra tu estrella</strong>
                                    </h3>
                                    <p>
                                        Da visibilidad a tu proyecto o S tartUp
                                        para su proyección y difusión.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 benefit-item mb-3 d-flex">
                                <img
                                    src="img/home/col_3.png"
                                    class="benefit-icon"
                                />
                                <div class="benefit-text">
                                    <h3 class="mb-1">
                                        <strong
                                            >Conoce otras civilizaciones</strong
                                        >
                                    </h3>
                                    <p>
                                        Más emprendedores, profesionales
                                        expertos e inversores quieren conocerte.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 benefit-item mb-3 d-flex">
                                <img
                                    src="img/home/col_4.png"
                                    class="benefit-icon"
                                />
                                <div class="benefit-text">
                                    <h3 class="mb-1">
                                        <strong
                                            >Explora nuevos universos</strong
                                        >
                                    </h3>
                                    <p>
                                        Conoce proyectos que te puedan guiar,
                                        permitan participar o aportar valor.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 benefit-item mb-3 d-flex">
                                <img
                                    src="img/home/col_5.png"
                                    class="benefit-icon"
                                />
                                <div class="benefit-text">
                                    <h3 class="mb-0">
                                        <strong
                                            >Cuestión de Fe y Ciencia</strong
                                        >
                                    </h3>
                                    <p>
                                        Creemos en el poder de la innovación,
                                        investigación, desarrollo y compartir la
                                        experiencia.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 benefit-item mb-3 d-flex">
                                <img
                                    src="img/home/col_6.png"
                                    class="benefit-icon"
                                />
                                <div class="benefit-text">
                                    <h3 class="mb-1">
                                        <strong>Hipervelocidad</strong>
                                    </h3>
                                    <p>
                                        Acelera y traza la ruta de tu StartUp
                                        con servicios premium a medida.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <img src="img/home/home_planet.png" width="100%" />
                    </div>
                </div>
            </div>
            <!-- End Benefits Movil -->
        </section>
        <!-- End Features Section -->

        <section data-aos="fade-up" data-aos-duration="2000">
            <div class="container-fluid bg-moon-astro">
                <div class="row align-items-start" style="height: 20%">
                    <div class="col-12 text-center">
                        <h2 class="font-bold">
                            Conoce nuestros tres universos
                        </h2>
                    </div>
                </div>
                <!-- <div class="container"> -->
                <div
                    class="row align-items-sm-end align-items-xs-start"
                    style="height: 50%"
                >
                    <div class="col-md-4 col-xs-12 text-center md:mb-20">
                        <a
                            :href="this.startupRoute"
                            class="btn btn-outline-primary"
                            style="min-width: 200px"
                        >
                            Startup
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 text-center">
                        <a
                            :href="this.professionalRoute"
                            class="btn btn-outline-primary"
                            style="min-width: 200px"
                            >Profesional</a
                        >
                    </div>
                    <div class="col-md-4 col-xs-12 text-center md:mb-20">
                        <a
                            :href="this.investorRoute"
                            class="btn btn-outline-primary"
                            style="min-width: 200px"
                            >Inversor</a
                        >
                    </div>
                </div>
                <!-- </div> -->

                <div class="row align-items-end pb-5" style="height: 35%">
                    <div class="col-12 text-center">
                        <a
                            class="btn btn-primary btn-lg px-5"
                            href="https://engine.thestartup-community.com/"
                            target="_blank"
                        >
                            ¡QUIERO UNIRME!
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            startupRoute: "startup",
            investorRoute: "investor",
            professionalRoute: "professional",
            selectedOpt: "startups",
        };
    },
};
</script>
