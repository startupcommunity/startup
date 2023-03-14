<template>
    <div class="container">
        <div class="row mt-5 justify-content-center mh-25 shadow-sm">
            <div class="col-md-12">
                <div class="card card-border-none">
                    <div class="card-body p-2">
                        <div class="row">
                            <div
                                class="col-md-2 my-3 d-flex justify-content-center"
                            >
                                <a class="search-link" href="/">
                                    <i class="bi bi-arrow-left px-2"></i>
                                    Volver al home
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-center">
                                    <div
                                        class="searchBox search-input d-block d-flex justify-content-between"
                                    >
                                        <div
                                            class="search-bar search-bar-border"
                                        >
                                            <form
                                                @submit.prevent="getResults(0)"
                                            >
                                                <div class="input-group">
                                                    <!-- <span
                                                        class="input-group-text icon-input"
                                                    >
                                                        <i
                                                            class="bi bi-sliders me-3"
                                                        ></i>
                                                    </span> -->
                                                    <div class="rail-select">
                                                        <select
                                                            class="form-select shadow-none search-input"
                                                            name="category"
                                                            id="category"
                                                            aria-label="Default select"
                                                            v-model="category"
                                                            @change="
                                                                getResults(0)
                                                            "
                                                        >
                                                            <option
                                                                value=""
                                                                disabled
                                                                hidden
                                                            >
                                                                Categorías
                                                            </option>
                                                            <option
                                                                selected
                                                                value="startups"
                                                            >
                                                                Startup
                                                            </option>
                                                            <option
                                                                value="professionals"
                                                            >
                                                                Profesional
                                                            </option>
                                                            <option
                                                                value="investors"
                                                            >
                                                                Inversor
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <input
                                                        type="text"
                                                        class="form-control shadow-none search-input"
                                                        name="search"
                                                        id="search"
                                                        v-model="inputSearch"
                                                        placeholder="Colocar tu búsqueda aquí"
                                                    />
                                                    <button
                                                        class="btn btn-primary rounded-circle"
                                                        type="submit"
                                                        @click="getResults(0)"
                                                    >
                                                        <i
                                                            class="bi bi-search"
                                                        ></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-2 d-flex align-middle justify-content-end"
                            >
                                <!-- <button href="/login" class="btn btn-primary">Iniciar sesión</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-3 my-lg-5 justify-content-center h-75 shadow-sm">
            <div class="col-md-12">
                <div class="card card-border-none">
                    <div class="card-body">
                        <div class="row g-0">
                            <div
                                class="col-md-6 overflow-auto"
                                style="max-height: calc(100vh - 22em)"
                            >
                                <div v-if="category === 'professionals'">
                                    <div v-if="startup">
                                        <single-professional-component
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            v-for="professional in laravelData"
                                            :key="professional._id"
                                            :professional="professional"
                                            @click="setStartup(professional)"
                                        >
                                        </single-professional-component>
                                    </div>
                                    <div v-else>
                                        <h4 class="dark-text">
                                            No hay resultados en la búsqueda
                                        </h4>
                                    </div>
                                </div>
                                <div v-else-if="category === 'investors'">
                                    <div v-if="startup">
                                        <single-investor-component
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            v-for="investor in laravelData"
                                            :key="investor._id"
                                            :investor="investor"
                                            @click="setStartup(investor)"
                                        ></single-investor-component>
                                    </div>
                                    <div v-else>
                                        <h4 class="dark-text">
                                            No hay resultados en la búsqueda
                                        </h4>
                                    </div>
                                </div>
                                <div v-else>
                                    <div v-if="startup">
                                        <single-component
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            v-for="startup in laravelData"
                                            :key="startup._id"
                                            :startup="startup"
                                            @click="setStartup(startup)"
                                        >
                                        </single-component>
                                    </div>
                                    <div v-else>
                                        <h4 class="dark-text">
                                            No hay resultados en la búsqueda
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-6 overflow-auto pt-2"
                                style="max-height: calc(100vh - 22em)"
                            >
                                <div v-if="category === 'professionals'">
                                    <information-professional-component
                                        v-if="startup"
                                        :professional="this.startup"
                                    >
                                    </information-professional-component>
                                </div>
                                <div v-else-if="category === 'investors'">
                                    <information-investor-component
                                        v-if="startup"
                                        :investor="this.startup"
                                    >
                                    </information-investor-component>
                                </div>
                                <div v-else>
                                    <div v-if="startup">
                                        <information-component
                                            v-if="this.startup"
                                            :startup="this.startup"
                                        ></information-component>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <vue-awesome-paginate
                :total-items="totalItems"
                :items-per-page="10"
                :max-pages-shown="5"
                v-model="currentPage"
                :on-click="onClickHandler"
            />
        </div>
    </div>
</template>
<script>
export default {
    name: "StartupsComponent",
    data() {
        return {
            laravelData: {},
            startup: null,
            inputSearch: "",
            category: "startups",
            currentPage: 1,
            totalItems: 0,
        };
    },
    mounted() {
        this.setQueryStringDefaults();
        this.getResults(0);
    },
    methods: {
        onClickHandler(page) {
            this.getResults(page - 1);
        },
        getResults(page) {
            if (typeof page === "undefined") {
                page = 0;
            }

            let data = JSON.stringify({
                name: this.inputSearch,
                page: page,
                limit: 10,
            });

            let config = {
                method: "post",
                url: `https://explorer.kiota.com/${this.category}`,
                headers: {
                    "X-Auth": "BucAFm3xS84NkHL",
                    "Content-Type": "application/json",
                },
                data: data,
            };

            axios(config)
                .then((response) => {
                    this.laravelData = response?.data[this.category];
                    this.startup = response?.data[this.category][0];
                    this.totalItems = response?.data.pagination.totalDocs;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        setStartup(startup) {
            this.startup = startup;
        },
        setQueryStringDefaults() {
            let queryString = window.location.search;
            let urlParams = new URLSearchParams(queryString);

            if (urlParams.has("page")) {
                const pageUrl = urlParams.get("page");
                this.currentPage = Number(pageUrl);
            }

            if (urlParams.has("search")) {
                this.inputSearch = urlParams.get("search");
            }

            if (urlParams.has("category")) {
                this.category = urlParams.get("category");
            }
        },
    },
};
</script>
