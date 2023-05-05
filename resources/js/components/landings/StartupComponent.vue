<template>
    <div>
        <!-- ======= About Section ======= -->
        <section
            class="bg-[url(/img/startup/bg-main.png)] bg-no-repeat bg-right bg-cover min-h-[620px]"
        >
            <div class="container-fluid px-0 d-block align-center">
                <div class="row mx-0 justify-content-center">
                    <div class="col-lg-12">
                        <div class="relative">
                            <img
                                src="img/startup/bg-space.png"
                                class="img-fluid absolute top-20"
                                alt="bg-space"
                                data-aos="flip-right"
                                data-aos-duration="1200"
                            />
                        </div>
                        <div
                            class="absolute inset-0 text-center top-32 lg:top-60"
                        >
                            <h1 class="pt-5 font-bold">
                                ¡Prepara el despegue de tu negocio!
                            </h1>
                            <h5 class="text-2xl font-light">
                                Con The Startup Community, conecta con
                                inversores y profesionales para <br />
                                llevar tu startup a nuevas galaxias de
                                crecimiento
                            </h5>
                            <div>
                                <p
                                    class="text-2xl lg:text-4xl py-3 font-bold -mt-3"
                                >
                                    ¿Eres un emprendedor con ideas más allá de
                                    este planeta?
                                </p>
                                <a
                                    target="_blank"
                                    class="no-underline uppercase text-white bg-app-pink-1 hover:bg-app-blue-2 duration-300 transition-all rounded-md px-16 py-2.5 text-lg font-medium cursor-pointer"
                                    @click.stop="linkedinAction"
                                >
                                    Registrarme
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- 3 iconos -->
        <section class="bg-[#0071BC] w-full h-[740px] md:h-44">
            <div class="container mx-auto">
                <div class="relative">
                    <div
                        class="flex flex-col md:flex-row md:justify-around pb-3 absolute inset-x-0 lg:-mt-14 top-5 lg:top-0 gap-3"
                    >
                        <div class="flex flex-col justify-center items-center">
                            <img src="/img/startup/emprende.png" alt="imagen" />
                            <p
                                class="text-white font-medium text-2xl text-center"
                            >
                                Emprende
                            </p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img
                                src="/img/startup/preparate.png"
                                alt="imagen"
                            />
                            <p
                                class="text-white font-medium text-2xl text-center"
                            >
                                Preparate
                            </p>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="/img/startup/despega.png" alt="imagen" />
                            <p
                                class="text-white font-medium text-2xl text-center"
                            >
                                Despega
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /3 iconos -->

        <section class="frame-blue py-5">
            <!-- 3 cohetes -->
            <div
                class="container bg-startup-feat px-lg-5"
                data-aos="fade-in"
                data-aos-duration="1200"
            >
                <h2 class="text-center">
                    ¿Por qué unirse a The Startup Community?
                </h2>
                <div class="row pb-5 align-items-center px-lg-5 mx-lg-5 pt-5">
                    <div
                        class="col-lg-4 d-flex justify-content-center pb-2 md:pb-0"
                    >
                        <img
                            src="img/startup/cohete_1.png"
                            class="img-fluid"
                            alt="descubre"
                        />
                    </div>
                    <div class="col-lg-8">
                        <h3
                            class="pb-1 text-3xl font-bold text-white text-md-start text-center"
                        >
                            Conecta con los indicados
                        </h3>
                        <p class="text-justify text-2xl font-medium">
                            Conéctate con inversores dispuestos a proporcionar
                            el combustible necesario para hacer despegar tu
                            startup.
                        </p>
                    </div>
                </div>
                <div class="row pb-5 align-items-center px-lg-5 mx-lg-5">
                    <div
                        class="col-lg-2 d-flex justify-content-center order-lg-2 pb-2 md:pb-0"
                    >
                        <img
                            src="img/startup/cohete_2.png"
                            class="img-fluid h-full"
                            alt="impulsa"
                        />
                    </div>
                    <div class="col-lg-10 order-lg-1">
                        <h3
                            class="pb-1 text-3xl font-bold text-white text-md-start text-center"
                        >
                            Elige tu tripulación
                        </h3>
                        <p class="text-justify text-2xl font-medium">
                            Encuentra profesionales y tripulantes con
                            habilidades específicas para impulsar tu
                            crecimiento.
                        </p>
                    </div>
                </div>
                <div class="row pb-5 align-items-center px-lg-5 mx-lg-5">
                    <div
                        class="col-lg-4 d-flex justify-content-center pb-2 md:pb-0"
                    >
                        <img
                            src="img/investor/impulsa.png"
                            class="img-fluid w-[148px]"
                            alt="conecta"
                        />
                    </div>
                    <div class="col-lg-8">
                        <h3
                            class="pb-1 text-3xl font-bold text-white text-md-start text-center"
                        >
                            Lo que necesitas está aquí
                        </h3>
                        <p class="text-justify text-2xl font-medium">
                            Accede a recursos y herramientas exclusivas para
                            potenciar tu negocio en el universo empresarial.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /3 cohetes -->

            <!-- divisores -->
            <div class="container">
                <div class="w-full border-t border-app-blue-2"></div>
                <div class="w-full border-t border-app-blue-2 mt-3"></div>
            </div>
            <!-- /divisores -->

            <!-- nuestra comunidad -->
            <div class="frame-blue py-5">
                <div class="container mx-auto">
                    <h3 class="text-4xl text-white font-black text-center">
                        Nuestra comunidad habla por nosotros
                    </h3>

                    <Loader v-if="loading" />
                    <carousel :items-to-show="1" v-else class="pt-5">
                        <slide v-for="investor in investors" :key="investor">
                            <div class="card comming-card">
                                <img
                                    :src="investor.img"
                                    class="aspect-square w-[120px] max-w-[180px] rounded-full object-center object-contain border-2 border-blue-400 bg-white mx-auto"
                                    :alt="investor.fullname"
                                />
                                <div class="comming-text p-2 text-center">
                                    <h3
                                        class="text-center text-xl font-semibold"
                                    >
                                        {{ investor.fullname }}
                                    </h3>
                                    <p class="uppercase text-xl font-semibold">
                                        {{ investor.type }}
                                    </p>
                                    <p
                                        class="lg:w-[600px] text-base leading-5 font-light"
                                    >
                                        {{ investor.bio }}
                                    </p>
                                </div>
                            </div>
                        </slide>
                        <template #addons>
                            <Navigation />
                        </template>
                    </carousel>
                </div>
            </div>
            <!-- nuestra comunidad -->

            <!-- divisores -->
            <div class="container">
                <div class="w-full border-t border-app-blue-2"></div>
                <div class="w-full border-t border-app-blue-2 mt-3"></div>
            </div>
            <!-- /divisores -->
        </section>
        <!-- End Features Section -->

        <!-- startups -->
        <!-- <section>
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
        </section> -->
        <section
            class="bg-[url(/img/backgrounds/moon.png)] bg-contain bg-no-repeat bg-bottom"
        >
            <div data-aos="fade-up" class="py-5">
                <div class="container text-center">
                    <div class="text-center">
                        <h3 class="font-black text-5xl text-white">
                            Conoce nuestras Start-ups
                        </h3>
                        <p class="font-bold text-3xl text-white">
                            Nuestras Startups están listas para despegar
                            contigo.
                        </p>
                    </div>
                    <div class="mx-lg-5 pt-5">
                        <Startup />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="font-black text-5xl text-white">
                                ¿Estás listo para comenzar tu aventura?
                            </h3>
                            <p class="font-bold text-xl text-white pb-3">
                                La comunidad está aquí para impulsar tus ideas a
                                universos de alto valor.
                            </p>
                            <a
                                target="_blank"
                                class="no-underline uppercase text-white bg-app-pink-1 hover:bg-app-blue-2 duration-300 transition-all rounded-md px-16 py-2.5 text-lg font-medium cursor-pointer"
                                @click.stop="linkedinAction"
                            >
                                Registrarme
                            </a>
                            <div class="pt-28"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /startups -->
    </div>
</template>

<script>
import "vue3-carousel/dist/carousel.css";
import Startup from "./components/Startup.vue";
import { Carousel, Slide, Navigation } from "vue3-carousel";

export default {
    components: { Startup, Carousel, Slide, Navigation },
    data() {
        return {
            startupRoute: "startup",
            investorRoute: "investor",
            professionalRoute: "professional",
            selectedOpt: "startups",
            loading: false,
            investors: [
                {
                    img: "img/startup/testimonio_1.png",
                    fullname: "Ana Rodríguez",
                    type: "CEO de SolarTech",
                    bio: "Desde que nos unimos a The Startup Community, hemos logrado conectar con inversores que realmente creen en nuestra visión. Gracias a su apoyo, hemos podido expandir nuestro negocio y llegar a nuevos mercados. La plataforma ha sido fundamental para nuestro crecimiento y nos ha permitido contratar a profesionales clave para nuestro equipo. ¡No podríamos estar más satisfechos!.",
                },
                {
                    img: "img/startup/testimonio_2.png",
                    fullname: "Pedro Gómez",
                    type: "Fundador de EcoInnova",
                    bio: "En The Startup Community, encontramos una red increíble de profesionales y expertos dispuestos a ayudarnos a mejorar nuestro producto. Gracias a esta plataforma, logramos asociarnos con un inversor que no solo aportó capital, sino también valiosos consejos y contactos en la industria. ¡Nuestro negocio está alcanzando nuevas alturas y no podríamos haberlo hecho sin The Startup Community!.",
                },
            ],
        };
    },

    methods: {
        /**
         * Ir a la pagina de registro
         */
        goToRegister() {
            window.location.href = route("engine.register");
        },

        /**
         * Tracking para linkedin
         * y redireccionar a registro
         */
        linkedinAction() {
            window.lintrk("track", { conversion_id: 13222705 });

            this.goToRegister();
        },
    },
};
</script>
