<footer class="bg-[#0e5394]">
    <div class="container pt-20 pb-5 pb-md-0">
        <div class="flex flex-col gap-3 md:flex-row justify-between text-center text-md-start">
            <div class="text-white">
                <img src="/img/logos/white.png" alt="startup-community" class="mx-auto pb-4">
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Politicas</h5>
                <p>
                    <a href="{{ route('terms.show') }}"
                        class="text-white no-underline text-base font-light hover:font-medium">
                        Terminos y condiciones
                    </a>
                </p>
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Atención a nuestros clientes</h5>
                <p>
                    <a href="{{ route('contact.create') }}"
                        class="text-white no-underline text-base font-light hover:font-medium">
                        Contacto
                    </a>
                </p>
            </div>
        </div>
        <div class="text-white text-center w-full mx-auto pt-5">
            <div class="flex flex-col md:flex-row text-center justify-center">
                <h5 class="font-bold text-lg">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Startup Community') }}
                </h5>
                <span class="font-light md:pl-3">
                    - Todos los derechos reservados.
                </span>
            </div>
        </div>
    </div>
</footer>
