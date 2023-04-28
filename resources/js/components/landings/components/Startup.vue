<template>
    <div class="px-3 lg:px-5">
        <Loader v-if="loading" />
        <carousel
            :items-to-show="items"
            v-else
            :wrapAround="true"
            :transition="500"
        >
            <slide
                v-for="(startup, index) in startups"
                :key="index"
                class="mt-5 pt-3 flex justify-center items-center"
            >
                <div class="w-full h-[400px] border-0 bg-transparent">
                    <div
                        class="flex justify-center cursor-pointer w-full"
                        @click.stop="goToDirectory(startup.name)"
                    >
                        <img
                            :src="startup.logo ? startup.logo : 'img/frame.png'"
                            :alt="startup.name"
                            class="bg-white border-2 border-blue-400 aspect-square w-[160px] h-[160px] rounded-full object-center object-contain carousel__item"
                        />
                    </div>
                    <div class="min-w-full p-2 flex flex-col items-center">
                        <h4 class="text-center">{{ startup.name }}</h4>
                        <div class="w-64">
                            <p
                                class="text-white font-light text-sm lg:text-base leading-6 text-center"
                            >
                                {{ truncateText(startup.brand_statement, 100) }}
                            </p>
                        </div>
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

<style scoped>
.carousel__slide--sliding {
    transition: 0.5s;
}

.carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.3);
}
</style>
