<template>
    <div class="row d-flex justify-content-center px-5">
        <div class="col-lg-8">
            <form action="directory" method="GET">
                <div class="search-bar">
                    <div class="input-group">
                        <!-- <span class="input-group-text icon-input">
                            <i class="bi bi-ui-checks"></i>
                        </span> -->

                        <div class="rail-select">
                            <select
                                class="form-select shadow-none search-input"
                                name="category"
                                aria-label="Default select example"
                                v-model="selected"
                            >
                                <option value="" disabled hidden>
                                    Categorías
                                </option>
                                <option
                                    v-for="option in options"
                                    :value="option.value"
                                >
                                    {{ option.text }}
                                </option>
                            </select>
                        </div>

                        <input
                            type="text"
                            class="form-control shadow-none search-input"
                            name="search"
                            placeholder="Colocar tu búsqueda de Startup aquí"
                        />
                        <button
                            class="btn btn-primary search-button"
                            type="submit"
                        >
                            <i class="bi bi-search"></i> BUSCAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ["selectedOpt"],
    data() {
        return {
            selected: this.selectedOpt,
            options: [
                { text: "Startup", value: "startups" },
                { text: "Profesional", value: "professionals" },
                { text: "Inversor", value: "investors" },
            ],
            defaultOption: "startups",
        };
    },

    created() {
        if (this.selected == null) {
            this.selected = this.defaultOption;
        }
    },
};
</script>

<style></style>
