// crear app vue
import { createApp } from 'vue';

// importar componentes
import HomeComponent from "./components/landings/HomeComponent.vue";
import InvestorComponent from './components/landings/InvestorComponent.vue';
import StartupLandingComponent from './components/landings/StartupComponent.vue';
import ProfessionalComponent from './components/landings/ProfessionalComponent.vue';
import ExampleComponent from './components/ExampleComponent.vue';
import StartupsComponent from './components/StartupsComponent.vue';
import InformationComponent from './components/InformationComponent.vue';
import SingleComponent from './components/SingleComponent.vue';
import StartupCreateComponent from './components/forms/StartupCreateComponent.vue';
import ProfessionalsSection from './components/sections/ProfessionalsSection.vue';
import SendSuscribe from './components/forms/SendSuscribe.vue';
import SuccessSubscribe from './components/sections/SuccessSubscribe.vue';
import SearchComponent from './components/forms/SearchComponent.vue';
import RegisterComponent from './components/auth/RegisterComponent.vue';
import PreRegisterComponent from './components/auth/PreRegisterComponent.vue';
import { Bootstrap5Pagination } from 'laravel-vue-pagination';

// importar bootstrap
import "bootstrap/dist/css/bootstrap.css";
import 'bootstrap-icons/font/bootstrap-icons.css';

// importar estilos
import "../css/custom.css";
import '../assets/vendor/aos/aos.css';
import '../assets/vendor/glightbox/css/glightbox.min.css';
import '../assets/vendor/remixicon/remixicon.css';
import '../assets/vendor/swiper/swiper-bundle.min.css';
import 'vue3-carousel/dist/carousel.css'
import aos from 'aos';
aos.init();

// crear app vue
const app = createApp({});

// registrar componentes
app.component("home-component", HomeComponent);
app.component('example-component', ExampleComponent);
app.component('startups-component', StartupsComponent);
app.component('startup-create-component', StartupCreateComponent);
app.component('send-suscribe', SendSuscribe);
app.component('success-susbcribe', SuccessSubscribe);
app.component('search-component', SearchComponent);
app.component('information-component', InformationComponent);
app.component('single-component', SingleComponent);
app.component('pagination', Bootstrap5Pagination);
app.component('register-component', RegisterComponent);
app.component('pre-register-component', PreRegisterComponent);
app.component('home-component', HomeComponent);
app.component('investor-component', InvestorComponent);
app.component('startup-landing-component', StartupLandingComponent);
app.component('professional-component', ProfessionalComponent);
app.component('professionals-section', ProfessionalsSection);

// montar app
app.mount("#app");
