<template>
    <section class="bg-white">
        <div class="container py-20">
            <div class="flex justify-center">
                <div class="w-full px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-zinc-100"
                    >
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold text-gray-900">
                                ¡Contáctanos!
                            </h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Completa el siguiente formulario y nos pondremos
                                en contacto contigo.
                            </p>
                            <form
                                @submit.prevent="saveNewMessage"
                                :class="{ 'opacity-50': loading }"
                                :disabled="loading"
                            >
                                <div class="relative w-full mb-3 mt-8">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="full-name"
                                    >
                                        Nombre completo *
                                    </label>
                                    <input
                                        type="text"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm w-full ease-linear transition-all duration-150 border-app-blue-1"
                                        placeholder="Nombre completo"
                                        v-model="form.name"
                                        required
                                    />
                                </div>

                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="email"
                                    >
                                        Email *
                                    </label>
                                    <input
                                        type="email"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm w-full ease-linear transition-all duration-150 border-app-blue-1"
                                        placeholder="Email"
                                        v-model="form.email"
                                        required
                                    />
                                </div>

                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="message"
                                    >
                                        Mensaje *
                                    </label>
                                    <textarea
                                        rows="4"
                                        cols="80"
                                        class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm w-full ease-linear transition-all duration-150 border-app-blue-1"
                                        placeholder="Escribe tu mensaje"
                                        v-model="form.message"
                                        required
                                    ></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button
                                        class="bg-app-blue-1 text-white active:bg-zinc-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="submit"
                                        :disabled="loading"
                                    >
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Create",

    data() {
        return {
            form: {
                name: "",
                email: "",
                message: "",
            },
            loading: false,
            show: true,
        };
    },

    mounted() {},

    computed: {
        formISValid() {
            return this.form.name && this.form.email && this.form.message;
        },
    },

    methods: {
        saveNewMessage() {
            if (!this.formISValid) {
                return this.$customMsj({
                    title: "Aviso",
                    text: "Todos los campos son obligatorios",
                    icon: "error",
                });
            }

            this.loading = true;

            axios
                .post(route("contact.store"), this.form)
                .then((resp) => {
                    if (resp.status === 201) {
                        this.$customMsj({
                            title: "Aviso",
                            text: "Mensaje enviado correctamente, te responderemos a la brevedad, gracias por contactarnos!",
                            icon: "success",
                        });

                        this.form = {
                            name: "",
                            email: "",
                            message: "",
                        };

                        return;
                    }

                    this.$customMsj({
                        title: "Aviso",
                        text: "Ocurrió un error al enviar el mensaje, intente de nuevo mas tarde",
                        icon: "error",
                    });
                })
                .catch((error) => this.$validationErrorMsj(error))
                .finally(() => (this.loading = false));
        },
    },
};
</script>
