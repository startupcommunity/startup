<template>
    <div class="row px-5">
        <Loader v-if="loading" />
        <carousel :items-to-show="items" v-else>
            <slide v-for="(startup, index) in startups" :key="index">
                <div class="card comming-card">
                    <div
                        class="d-flex justify-content-center cursor-pointer"
                        @click.stop="goToDirectory(startup.name)"
                    >
                        <img
                            :src="startup.logo ? startup.logo : 'img/frame.png'"
                            class="aspect-square 8-[120px] h-[180px] max-w-[180px] max-h-[180px] rounded-full object-center object-contain border-2 border-blue-400 bg-white"
                            :alt="startup.name"
                        />
                    </div>
                    <div class="comming-text p-2">
                        <h4 class="text-center">{{ startup.name }}</h4>
                        <p
                            class="text-white font-light text-base leading-6 lg:w-[300px]"
                        >
                            {{ truncateText(startup.brand_statement, 100) }}
                        </p>
                    </div>
                </div>
            </slide>
            <template #addons>
                <Navigation />
            </template>
        </carousel>
    </div>
</template>

<script>
import { Carousel, Slide, Navigation } from "vue3-carousel";
import Loader from "../../global/Loader.vue";
export default {
    name: "Startup",
    components: {
        Carousel,
        Slide,
        Navigation,
        Loader,
    },
    data() {
        return {
            items: 0,
            window: { width: 0 },
            startups: [],
            loading: false,
            category: "startups",
        };
    },

    created() {
        this.loadData();
    },

    destroyed() {
        window.removeEventListener("resize", this.handleResize);
    },

    methods: {
        /**
         * Ni idea de que hace
         * supongo tiene que ver con el responsive ¿?
         */
        handleResize() {
            this.window.width = window.innerWidth;
            if (this.window.width < 768) {
                this.items = 1;
            } else if (this.window.width < 992) {
                this.items = 2;
            } else {
                this.items = 3;
            }
        },

        /**
         * Cargar los datos de las startups
         */
        loadData() {
            this.loading = true;
            const data = JSON.stringify({
                name: "",
                page: 0,
                limit: 10,
            });

            const config = {
                method: "post",
                url: this.$kiotaEp.startups,
                data: data,
                headers: {
                    "X-Auth": this.$xAuthKiota,
                    "Content-Type": "application/json",
                },
            };

            axios(config)
                .then((resp) => {
                    this.startups = resp?.data[this.category];
                })
                .then((_) => {
                    window.addEventListener("resize", this.handleResize);
                    this.handleResize();
                })
                .catch((error) => this.$validationErrorMsj(error))
                .finally(() => (this.loading = false));
        },

        /**
         * Ir al directorio de una startup
         * con el nombre de la startup
         *
         * @param {String} name     Nombre de la startup
         */
        goToDirectory(name) {
            globalThis.location.href = `/directory?category=${this.category}&search=${name}`;
        },

        /**
         * Truncar texto
         *
         * @param {String} text     Texto a truncar
         * @param {Number} value    Valor de truncado
         * @returns {String}        Texto truncado
         */
        truncateText(text, value) {
            if (!text) return "";

            if (text.length > value) {
                return text.substring(0, value) + "...";
            }

            return text;
        },
    },
};
</script>
