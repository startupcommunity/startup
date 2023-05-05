// importar estilos
import "bootstrap/dist/css/bootstrap.css";
// bundle de bootstrap
import "bootstrap/dist/js/bootstrap.bundle.js";
import "bootstrap-icons/font/bootstrap-icons.css";
import "../css/custom.css";
import "../assets/vendor/aos/aos.css";
import "../assets/vendor/glightbox/css/glightbox.min.css";
import "../assets/vendor/remixicon/remixicon.css";
import "../assets/vendor/swiper/swiper-bundle.min.css";
import "vue3-carousel/dist/carousel.css";
import "vue-awesome-paginate/dist/style.css";

// import plugins
import "../js/bootstrap";
import GlobalMixin from "./mixins/globalMixin.js";
import VueAwesomePaginate from "vue-awesome-paginate";
import { Bootstrap5Pagination } from "laravel-vue-pagination";
import { VueReCaptcha } from "vue-recaptcha-v3";

// importar componentes vue
import HomeComponent from "./components/landings/HomeComponent.vue";
import InvestorComponent from "./components/landings/InvestorComponent.vue";
import StartupLandingComponent from "./components/landings/StartupComponent.vue";
import ProfessionalComponent from "./components/landings/ProfessionalComponent.vue";
import ExampleComponent from "./components/ExampleComponent.vue";
import StartupsComponent from "./components/StartupsComponent.vue";
import InformationComponent from "./components/InformationComponent.vue";
import SingleComponent from "./components/SingleComponent.vue";
import StartupCreateComponent from "./components/forms/StartupCreateComponent.vue";
import ProfessionalsSection from "./components/sections/ProfessionalsSection.vue";
import SendSuscribe from "./components/forms/SendSuscribe.vue";
import SuccessSubscribe from "./components/sections/SuccessSubscribe.vue";
import SearchComponent from "./components/forms/SearchComponent.vue";
import RegisterComponent from "./components/auth/RegisterComponent.vue";
import PreRegisterComponent from "./components/auth/PreRegisterComponent.vue";
import SingleProfessionalComponent from "./components/SingleProfessionalComponent.vue";
import InformationProfessional from "./components/InformationProfessionalComponent.vue";
import SingleInvestorComponent from "./components/SingleInvestorComponent.vue";
import InformationInvestorComponent from "./components/InformationInvestorComponent.vue";

// módulos
import Contact from "./modules/contact.js";
import Term from "./modules/term.js";
import "./modules/navbar.js";

// crear app vue
import { createApp } from "vue";
const app = createApp({});

// registrar componentes
app.component("home-component", HomeComponent);
app.component("example-component", ExampleComponent);
app.component("startups-component", StartupsComponent);
app.component("startup-create-component", StartupCreateComponent);
app.component("send-suscribe", SendSuscribe);
app.component("success-susbcribe", SuccessSubscribe);
app.component("search-component", SearchComponent);
app.component("information-component", InformationComponent);
app.component("single-component", SingleComponent);
app.component("pagination", Bootstrap5Pagination);
app.component("pagination-own", VueAwesomePaginate);
app.component("register-component", RegisterComponent);
app.component("pre-register-component", PreRegisterComponent);
app.component("home-component", HomeComponent);
app.component("investor-component", InvestorComponent);
app.component("startup-landing-component", StartupLandingComponent);
app.component("professional-component", ProfessionalComponent);
app.component("professionals-section", ProfessionalsSection);
app.component("single-professional-component", SingleProfessionalComponent);
app.component("information-professional-component", InformationProfessional);
app.component("single-investor-component", SingleInvestorComponent);
app.component("information-investor-component", InformationInvestorComponent);

// use and install
app.use(GlobalMixin); // global mixin
app.use(Contact); // modulo contacto
app.use(Term); // modulo términos
app.use(VueAwesomePaginate);
app.use(VueReCaptcha, { siteKey: import.meta.env.VITE_RECAPTCHA_SITE_KEY });

// montar app
app.mount("#app");
