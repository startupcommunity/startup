/**
 * Global Mixin de la vue app
 *
 * @author  Luisandev <https://luisan.dev >
 */

import Swal from "sweetalert2";

export default {
    install(app) {
        app.mixin({
            methods: {
                /**
                 * Mensaje exitoso
                 */
                $successMsj(message) {
                    Swal.fire({
                        icon: "success",
                        title: message,
                        showConfirmButton: true,
                        confirmButtonColor: "#0e5394",
                        cancelButtonColor: "#d33",
                    });
                },

                /**
                 * Mensaje de error
                 */
                $errorMsj(message) {
                    Swal.fire({
                        icon: "error",
                        title: message,
                        showConfirmButton: true,
                        confirmButtonColor: "#0e5394",
                        cancelButtonColor: "#d33",
                    });
                },

                /**
                 * Mensaje personalizado
                 */
                $customMsj({
                    icon = "success",
                    title = "Aviso",
                    text = "¿Desea continuar?",
                    showConfirmButton = true,
                    confirmButtonColor = "#0e5394",
                    cancelButtonColor = "#d33",
                }) {
                    Swal.fire({
                        icon,
                        title,
                        text,
                        showConfirmButton,
                        confirmButtonColor,
                        cancelButtonColor,
                    });
                },

                /**
                 * Error de validación por laravel
                 */
                $validationErrorMsj(errors) {
                    console.error(errors);
                    if (errors.response?.data?.errors) {
                        const data = errors.response.data.errors;
                        let mjsErrors = [];
                        for (const error in data) {
                            mjsErrors.push(data[error][0]);
                        }

                        // separar mensajes por saltos de linea
                        const separateMsj = mjsErrors.join(",");

                        this.$customMsj({
                            // html: true,
                            icon: "error",
                            title: "Aviso",
                            text: separateMsj,
                        });
                    }
                },
            },

            computed: {
                /** Api kiota */
                $apiKiotaUrl() {
                    return "https://explorer.kiota.com/";
                },

                /** X-auth */
                $xAuthKiota() {
                    return "BucAFm3xS84NkHL";
                },

                /** endpoints de kiota */
                $kiotaEp() {
                    return {
                        // startups
                        startups: this.$apiKiotaUrl + "startups",
                    };
                },
            },
        });
    },
};
