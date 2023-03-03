<footer class="bg-[#0e5394]">
    <div class="container py-20">
        <div class="flex flex-col gap-5 md:flex-row justify-between text-center text-md-start">
            <div class="text-white">
                <h5 class="font-bold text-lg">
                    &copy; {{ config('app.name', 'Startup Community') }} {{ date('Y') }}
                </h5>
                <span class="font-light">
                    Todos los derechos reservados.
                </span>
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Politicas</h5>
                <p>
                    <a href="{{ route('terms.show') }}"
                        class="text-white hover:no-underline no-underline text-base font-light">
                        Terminos y condiciones
                    </a>
                </p>
                <p>
                    <a href="{{ route('contact.create') }}"
                        class="text-white hover:no-underline no-underline text-base font-light">
                        Contacto
                    </a>
                </p>
            </div>
            <div>
                <h5 class="pb-2 text-lg font-bold">Contacto</h5>
                <p>
                    <a href="mailto:info@thestartup-community.com"
                        class="text-white hover:no-underline no-underline text-base font-light">
                        info@thestartup-community.com
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
