    </main>

    <footer class="bg-primary-500 py-20">
        <div class="site-container">
            <div class="grid xl:grid-cols-4 gap-10 xl:gap-24">
                <div>
                    <a href="/">
                        <img src="<?= get_template_directory_uri() ?>/images/vercor-logo-blanco.svg">
                    </a>
                    <p class="text-primary-100 text-xs mt-5 mb-4">Más allá de las estructuras, impulsamos lo que trasciende.</p>
                    <p class="text-primary-100 text-xs">VERCOR Construcciones</p>
                    <p class="text-primary-100 text-xs">RUC: 20482508317</p>
                </div>
                <div class="xl:col-span-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 xl:gap-4">
                        <div>
                            <h5 class="text-white text-xl font-medium mb-4">Vercor</h5>
                            <ul class="space-y-2.5 text-sm">
                                <li class="text-primary-100 hover:text-white"><a href="<?= get_site_url() ?>">Inicio</a></li>
                                <li class="text-primary-100 hover:text-white"><a href="<?= get_site_url() ?>/nosotros">Nosotros</a></li>
                                <li class="text-primary-100 hover:text-white"><a href="<?= get_site_url() ?>/servicios">Servicios</a></li>
                                <li class="text-primary-100 hover:text-white"><a href="<?= get_site_url() ?>/proyectos">Proyectos</a></li>
                                <li class="text-primary-100 hover:text-white"><a href="<?= get_site_url() ?>/trabaja-con-nosotros">Trabaja con nosotros</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-white text-xl font-medium mb-4">Servicios</h5>
                            <ul class="space-y-2.5 text-sm">
                                <li class="text-primary-100 hover:text-white">Gas y Petróleo</li>
                                <li class="text-primary-100 hover:text-white">Minería</li>
                                <li class="text-primary-100 hover:text-white">Energía</li>
                                <li class="text-primary-100 hover:text-white">Industria</li>
                                <li class="text-primary-100 hover:text-white">Infraestructura</li>
                                <li class="text-primary-100 hover:text-white">Edificaciones</li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="text-white text-xl font-medium mb-4">Contacto</h5>
                            <ul class="space-y-3 text-sm">
                                <li class="text-primary-100 hover:text-white flex gap-2">
                                    <div>
                                        <i data-lucide="phone-call" class="h-5 w-5"></i>
                                    </div>
                                    <a href="tel:+51 925 283 791">+51 925 283 791</a> - <a href="tel:+51 939 430 180">+51 939 430 180</a>
                                </li>
                                <li class="text-primary-100 hover:text-white flex gap-2">
                                    <div>
                                        <i data-lucide="mail-check" class="h-5 w-5"></i>
                                    </div>
                                    <a href="mailto:info@vercor.com">info@vercor.pe</a>
                                </li>
                                <li class="text-primary-100 hover:text-white flex gap-2">
                                    <div>
                                        <i data-lucide="map-pin-house" class="h-5 w-5"></i>
                                    </div>
                                    <p>Calle Obispo Guillermo #294, San Andrés I Etapa, Trujillo, La Libertad</p>
                                </li>
                            </ul>
                            <div class="flex items-center gap-4 mt-6">
                                <a href="#" target="_blank"><i data-lucide="linkedin" class="fill-secondary-950 stroke-secondary-950 w-6 h-6"></i></a>
                                <a href="#" target="_blank"><i data-lucide="facebook" class="fill-secondary-950 stroke-secondary-950 w-6 h-6"></i></a>
                                <a href="#" target="_blank"><i data-lucide="instagram" class="text-secondary-950 w-6 h-6"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-primary-400 mt-12 mb-5">
            <p class="text-primary-200 text-sm">© 2025 VERCOR. Todos los derechos reservados.</p>
        </div>
    </footer>
    </div>

    <?php wp_footer(); ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper-projects', {
            loop: true,
            spaceBetween: 30,
            //centeredSlides: true,
            autoplay: {
                delay: 20000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination-custom",
                clickable: true,
            },
        });
    </script>

    </body>

    </html>