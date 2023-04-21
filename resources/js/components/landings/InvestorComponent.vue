<template>
    <div>
        <section
            class="bg-[url(/img/backgrounds/investor_bg.png)] bg-no-repeat bg-center bg-cover min-h-[620px]"
        >
            <div class="container-fluid px-0 d-block align-center">
                <div class="row mx-0 justify-content-center">
                    <div class="col-lg-12">
                        <div class="relative">
                            <img
                                src="img/backgrounds/investor_space.png"
                                class="img-fluid absolute top-20"
                                alt="investor_space"
                                data-aos="flip-right"
                                data-aos-duration="1200"
                            />

                            <div class="absolute inset-0 text-center lg:top-20">
                                <h1 class="pt-5">
                                    Invierte en ideas fuera de<br />
                                    este planeta
                                </h1>
                                <h3 class="text-2xl font-light">
                                    Un universo de ideas innovadoras está listo
                                    para ser explorado.
                                </h3>
                                <div class="container">
                                    <search-component
                                        :selectedOpt="selectedOpt"
                                    ></search-component>
                                </div>
                                <p class="text-2xl py-3">
                                    ¿Tienes el combustible necesario para hacer
                                    despegar esa StartUp única?
                                </p>
                                <div>
                                    <a
                                        :href="goToRegister"
                                        target="_blank"
                                        class="no-underline text-white hover:bg-[#2286b8] duration-700 ease-out border rounded-full px-5 py-2 text-3xl font-bold"
                                    >
                                        <span class="hidden lg:inline-flex">
                                            ¡Únete ahora y acelera el
                                            crecimiento de las startups!
                                        </span>
                                        <span class="inline-flex lg:hidden">
                                            ¡Únete ahora!
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="container-fluid d-block d-md-none py-4">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <h1 class="">
                            Invierte en <br />ideas fuera de este planeta
                        </h1>
                        <h4 class="py-4">
                            ¿Tienes el combustible necesario para hacer despegar
                            esa StartUp única?
                        </h4>
                        <img
                            src="img/startup/rocket.png"
                            class="img-fluid"
                            alt=""
                        />
                        <h3>
                            Busca o deja que te encuentren los inversores más
                            adecuados para ello.
                        </h3>
                        <h5 class="pt-4">
                            (La conexión con los inversores dependen de los
                            permisos concedidos por los mismos)
                        </h5>
                        <div class="container">
                            <search-component
                                :selectedOpt="selectedOpt"
                            ></search-component>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>

        <section class="bg-[#0071BC] w-full">
            <div class="container mx-auto">
                <h3 class="text-white font-bold text-4xl text-center p-5">
                    Sé un inversor en The Startup Community y…
                </h3>
            </div>
        </section>

        <!-- ======= Features Section ======= -->
        <section class="py-3">
            <div class="container px-lg-5">
                <div class="row pb-5 align-items-center px-lg-5 mx-lg-5 pt-5">
                    <div
                        class="col-lg-2 d-flex justify-content-center pb-2 md:pb-0"
                    >
                        <img
                            src="img/investor/descubre.png"
                            class="img-fluid w-40 md:w-full"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-10">
                        <h3
                            class="pb-1 text-3xl font-bold text-white text-md-start text-center"
                        >
                            Descubre oportunidades innovadoras
                        </h3>
                        <p class="text-justify text-2xl font-medium">
                            Explora una galaxia de startups innovadoras y
                            encuentra las oportunidades de inversión que te
                            llevarán más allá de las estrellas.
                        </p>
                    </div>
                </div>
                <div class="row pb-5 align-items-center px-lg-5 mx-lg-5">
                    <div
                        class="col-lg-2 d-flex justify-content-center order-lg-2 pb-2 md:pb-0"
                    >
                        <img
                            src="img/investor/impulsa.png"
                            class="img-fluid w-40 md:w-full"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-10 order-lg-1">
                        <h3
                            class="pb-1 text-3xl font-bold text-white text-md-start text-center"
                        >
                            Impulsa el crecimiento de negocios de alto valor
                        </h3>
                        <p class="text-justify text-2xl font-medium">
                            Tu inversión es el combustible que ayuda a las
                            startups a despegar hacia nuevos horizontes de alto
                            valor.
                        </p>
                    </div>
                </div>
                <div class="row pb-5 align-items-center px-lg-5 mx-lg-5">
                    <div
                        class="col-lg-2 d-flex justify-content-center pb-2 md:pb-0"
                    >
                        <img
                            src="img/investor/conecta.png"
                            class="img-fluid w-40 md:w-full"
                            alt=""
                        />
                    </div>
                    <div class="col-lg-10">
                        <h3
                            class="pb-1 text-3xl font-bold text-white text-md-start text-center"
                        >
                            Conecta con una red de expertos
                        </h3>
                        <p class="text-justify text-2xl font-medium">
                            Únete a nuestra comunidad de profesionales y otros
                            inversores para compartir conocimientos y fortalecer
                            tus conexiones en el ecosistema emprendedor.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->

        <!-- nuestra comunidad -->
        <section class="frame-blue py-5">
            <div class="container mx-auto">
                <h3 class="text-4xl text-white font-black text-center">
                    Nuestra comunidad habla por nosotros
                </h3>

                <Loader v-if="loading" />
                <carousel :items-to-show="1" v-else>
                    <slide v-for="investor in investors" :key="investor">
                        <div class="card comming-card">
                            <img
                                :src="investor.img"
                                class="aspect-square w-[120px] max-w-[180px] rounded-full object-center object-contain border-2 border-blue-400 bg-white mx-auto"
                                :alt="investor.fullname"
                            />
                            <div class="comming-text p-2 text-center">
                                <h3 class="text-center text-xl font-semibold">
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
        </section>
        <!-- nuestra comunidad -->

        <!-- startups -->
        <section>
            <div data-aos="fade-up" class="bg-moon py-5">
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
                    <div class="mx-lg-5 py-5">
                        <Startup />
                    </div>
                    <div class="row pb-5">
                        <div class="col-12">
                            <h3 class="font-black text-3xl text-white pb-3">
                                ¿Estás listo para comenzar tu aventura?
                            </h3>
                            <!-- <p class="font-bold text-xl text-white">
                                Nuestras Startups están listas para despegar
                                contigo.
                            </p> -->
                            <a
                                class="no-underline text-white hover:bg-[#2286b8] duration-700 ease-out border rounded-full px-5 py-2 hidden lg:inline-flex"
                                :href="goToRegister"
                                target="_blank"
                            >
                                Regístrate ahora y comienza a impulsar el
                                crecimiento de startups únicas
                            </a>
                            <a
                                class="no-underline text-white hover:bg-[#2286b8] duration-700 ease-out border rounded-full px-5 py-2 inline-flex lg:hidden"
                                :href="goToRegister"
                                target="_blank"
                            >
                                Regístrate ahora
                            </a>

                            <div class="mt-5">
                                <img
                                    src="img/investor/unete.png"
                                    alt="únete"
                                    class="mx-auto w-40 lg:w-80"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="container d-none d-md-block px-5">
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
                </div> -->
            </div>
        </section>
        <!-- /startups -->
    </div>
</template>

<script>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Navigation } from "vue3-carousel";
import Startup from "./components/Startup.vue";
import Loader from "../global/Loader.vue";
export default {
    name: "App",
    components: {
        Carousel,
        Slide,
        Navigation,
        Startup,
        Loader,
    },
    data() {
        return {
            startupRoute: "startup",
            investorRoute: "investor",
            professionalRoute: "professional",
            selectedOpt: "investors",
            loading: false,

            investors: [
                {
                    img: "img/investor/investor-1.png",
                    fullname: "Juan Pérez",
                    type: "Inversor",
                    bio: "Gracias a The Startup Community, encontré una startup en pleno despegue. La plataforma me ayudó a tomar decisiones de inversión más inteligentes y a impulsar el crecimiento de negocios prometedores.",
                },
                {
                    img: "img/investor/investor-2.png",
                    fullname: "María Sánchez",
                    type: "Inversora",
                    bio: "The Startup Community me permitió ampliar mi red al conectarme con otros inversores y profesionales. Ahora cuento con un grupo de expertos que me ayuda a mejorar mis habilidades como inversor.",
                },
            ],
        };
    },

    computed: {
        goToRegister() {
            return route("engine.register");
        },
    },

    methods: {
        goToRegister() {
            window.location.href = route("engine.register");
        },
    },
};
</script>
