<?= get_header() ?>

<section class="cover relative overflow-hidden bg-secondary-900 h-[450px] lg:h-[668px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-bg-cover.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute bottom-14 md:bottom-16 xl:bottom-32 2xl:bottom-40 left-0 right-0">
        <div class="site-container">
            <h1 class="text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl text-white font-bold">Más allá de las estructuras,<br>impulsamos lo que trasciende</h1>
        </div>
    </div>
</section>

<section class="about bg-primary-50 py-20">
    <div class="site-container">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 xl:gap-10">
            <div class="md:col-span-6 lg:col-span-7 xl:col-span-7 flex items-center">
                <div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold mb-4">Nuestra escencia</h2>
                    <p class="lg:text-xl text-gray-600">Desarrollamos proyectos inmobiliarios que generan valor, creando espacios pensados para nuestros clientes y para el bienestar de la comunidad.</p>

                    <hr class="my-5 lg:my-10 border-primary-200">

                    <div class="flex items-start gap-4 mb-8 lg:mb-10">
                        <div>
                            <i data-lucide="badge-check" class="w-10 h-10 md:w-12 md:h-12 text-primary-500 stroke-1"></i>
                        </div>
                        <div>
                            <h3 class="text-lg lg:text-2xl font-semibold mb-4">Ingenieros y técnicos calificados</h3>
                            <p class="text-gray-600">El dominio técnico y la experiencia práctica de nuestro equipo de ingenieros garantizan soluciones eficientes ante los desafíos más complejos.</p>
                        </div>
                    </div>

                    <a href="http://vercor.test/nosotros/" class="btn btn-primary uppercase font-medium">Conoce más</a>
                </div>
            </div>
            <div class="md:col-span-6 lg:col-span-5 xl:col-span-5">
                <img src="<?= get_template_directory_uri() ?>/images/vercor-about-home.jpg" class="w-full h-full rounded-lg object-cover object-center shadow">
            </div>
        </div>
    </div>
</section>

<section class="services bg-white py-20">
    <div class="site-container">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-primary-500 text-xl md:text-2xl mb-3">Servicios</h2>
            <p class="text-2xl md:text-3xl font-semibold">Impulsamos nuestros servicios en los siguientes sectores</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-12">
            <div>
                <img src="https://placehold.jp/510x250.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                <h4 class="text-xl md:text-2xl text-primary-500 font-medium">Gas y Petróleo</h4>
            </div>
            <div>
                <img src="https://placehold.jp/510x250.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                <h4 class="text-xl md:text-2xl text-primary-500 font-medium">Minería</h4>
            </div>
            <div>
                <img src="https://placehold.jp/510x250.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                <h4 class="text-xl md:text-2xl text-primary-500 font-medium">Energía</h4>
            </div>
            <div>
                <img src="https://placehold.jp/510x250.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                <h4 class="text-xl md:text-2xl text-primary-500 font-medium">Industria</h4>
            </div>
            <div>
                <img src="https://placehold.jp/510x250.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                <h4 class="text-xl md:text-2xl text-primary-500 font-medium">Infraestructura</h4>
            </div>
            <div>
                <img src="https://placehold.jp/510x250.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                <h4 class="text-xl md:text-2xl text-primary-500 font-medium">Edificaciones</h4>
            </div>
        </div>
    </div>
</section>

<section class="projects py-20 bg-primary-50">
    <div class="site-container">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-primary-500 text-xl md:text-2xl mb-3">Proyectos</h2>
            <p class="text-2xl md:text-3xl font-semibold mb-3">Nuestro legado en cada obra</p>
            <p class="md:text-lg text-gray-600">Más que construcciones, materializamos tú visión.</p>
        </div>

        <div class="swiper swiper-projects mt-12">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                        <div>
                            <img src="https://placehold.jp/510x280.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                        </div>
                        <div class="flex items-center">
                            <div>
                                <p class="text-lg text-primary-500 mb-1">Proyecto</p>
                                <h4 class="text-2xl font-medium mb-3">
                                    Lorem ipsum dolor sit amet consectetur lectus felis eget
                                </h4>
                                <p class="text-gray-600 mb-5">Lorem ipsum dolor sit amet consectetur. Faucibus iaculis lacus scelerisque diam.</p>
                                <a href="#" class="btn btn-primary uppercase">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                        <div>
                            <img src="https://placehold.jp/510x280.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                        </div>
                        <div class="flex items-center">
                            <div>
                                <p class="text-lg text-primary-500 mb-1">Proyecto</p>
                                <h4 class="text-2xl font-medium mb-3">
                                    Lorem ipsum dolor sit amet consectetur lectus felis eget
                                </h4>
                                <p class="text-gray-600 mb-5">Lorem ipsum dolor sit amet consectetur. Faucibus iaculis lacus scelerisque diam.</p>
                                <a href="#" class="btn btn-primary uppercase">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                        <div>
                            <img src="https://placehold.jp/510x280.jpg" class="w-full rounded-lg object-cover object-center mb-4">
                        </div>
                        <div class="flex items-center">
                            <div>
                                <p class="text-lg text-primary-500 mb-1">Proyecto</p>
                                <h4 class="text-2xl font-medium mb-3">
                                    Lorem ipsum dolor sit amet consectetur lectus felis eget
                                </h4>
                                <p class="text-gray-600 mb-5">Lorem ipsum dolor sit amet consectetur. Faucibus iaculis lacus scelerisque diam.</p>
                                <a href="#" class="btn btn-primary uppercase">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination-custom"></div>
        </div>
    </div>
</section>

<?= get_footer() ?>