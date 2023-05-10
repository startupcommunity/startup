<footer class="bg-[#0e5394]">
    <div class="container pt-20 pb-5 pb-md-2">
        <div class="flex flex-col gap-3 md:flex-row justify-between text-center text-md-start pb-5">
            <div>
                <a href="/">
                    <img src="/img/logos/white.png" alt="startup-community" class="pb-4 mx-auto mx-md-0">
                </a>

                {{--  social media  --}}
                <div class="flex justify-center md:justify-start text-white gap-2 pb-3 md:pb-0">
                    <a href="{{ route('app-facebook') }}" target="_blank"
                        class="bg-[#4460a0] p-2 rounded-full hover:bg-app-blue-1 transition-all ease-in-out duration-300">
                        <img src="/img/social/facebook.png" alt="facebook" class="w-6 h-6">
                    </a>
                    <a href="{{ route('app-instagram') }}" target="_blank"
                        class="bg-gray-200 p-2 rounded-full hover:bg-app-blue-1 transition-all ease-in-out duration-300">
                        <img src="/img/social/instagram.png" alt="instagram" class="w-6 h-6">
                    </a>
                    {{--  <a href="{{ route('app-linkedin') }}" target="_blank"
                        class="bg-[#007ebb] p-2 rounded-full hover:bg-app-blue-1 transition-all ease-in-out duration-300">
                        <img src="/img/social/linkedin.png" alt="linkedin" class="w-6 h-6">
                    </a>
                    <a href="{{ route('app-twitter') }}" target="_blank"
                        class="bg-[#4cc7f1] p-2 rounded-full hover:bg-app-blue-1 transition-all ease-in-out duration-300">
                        <img src="/img/social/twitter.png" alt="twitter" class="w-6 h-6">
                    </a>  --}}
                </div>
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Navegar</h5>
                <p class="mb-1">
                    <a href="{{ route('landings') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Home
                    </a>
                </p>
                <p class="mb-1">
                    <a href="{{ route('landings.startup') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Startups
                    </a>
                </p>
                <p class="mb-1">
                    <a href="{{ route('landings.professional') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Profesionales
                    </a>
                </p>
                <p class="mb-1">
                    <a href="{{ route('landings.investor') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Inversores
                    </a>
                </p>
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Politicas</h5>
                <p class="mb-1">
                    <a href="{{ route('terms.show') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Terminos y condiciones
                    </a>
                </p>
                <p class="mb-1">
                    <a href="{{ route('politics.show') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Politicas de privacidad
                    </a>
                </p>
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Atención</h5>
                <p class="mb-1">
                    <a href="{{ route('contact.create') }}"
                        class="text-gray-300 no-underline text-base font-light hover:text-white">
                        Contacto
                    </a>
                </p>
            </div>
        </div>
        <div class="text-center w-full mx-auto border-t pt-3 border-blue-500">
            <div class="flex flex-col md:flex-row text-center justify-center">
                <h5 class="font-light text-sm text-gray-300">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Startup Community') }}
                    - Todos los derechos reservados.
                </h5>
            </div>
        </div>
    </div>
</footer>
