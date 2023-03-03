import ContactCreate from "./../components/contact/Create.vue";

export default {
    install(app) {
        app.component("contact-create", ContactCreate);
    },
};
