<template>
    <div class="row px-5">
        <Loader v-if="loading" />
        <carousel :items-to-show="items" v-else>
            <slide v-for="startup in startups" :key="startup">
                <div class="card comming-card">
                    <div class="d-flex justify-content-center cursor-pointer">
                        <img
                            :src="startup.logo ? startup.logo : 'img/frame.png'"
                            class="aspect-square 8-[120px] h-[180px] max-w-[180px] max-h-[180px] rounded-full object-center object-contain border-2 border-blue-400 bg-white"
                            :alt="startup.name"
                        />
                    </div>
                    <div class="comming-text p-2">
                        <h4 class="text-center">{{ startup.name }}</h4>
                    </div>
                </div>
            </slide>
            <template #addons>
                <navigation />
            </template>
        </carousel>
    </div>
</template>

<script>
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import Loader from "../../global/Loader.vue";
export default {
    name: "Startup",
    components: {
        Carousel,
        Slide,
        Pagination,
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
        handleResize() {
            this.window.width = window.innerWidth;
            if (this.window.width < 768) {
                this.items = 1;
            } else if (this.window.width < 992) {
                this.items = 2;
            } else {
                this.items = 4;
            }
        },

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
    },
};
</script>
