<?php /* Template Name: Projects */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-header-services.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Proyectos</h1>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="site-container">
        <div class="grid grid-cols-1 gap-8">
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
</section>

<section class="bg-primary-50 py-20">
    <div class="site-container">
        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('<?= get_template_directory_uri() ?>/images/vercor-services-card.jpg')">
            <div class="overlay absolute top-0 bottom-0 left-0 right-0 bg-linear-to-r from-slate-900/90 via-slate-900/80 to-slate-900/50"></div>
            <div class="relative px-10 py-20 md:py-28">
                <h4 class="text-white md:text-lg md:max-w-1/2 mb-8">Brindamos soluciones innovadoras para proyectos complejos.</h4>
                <a href="#" class="btn btn-primary uppercase">Ver servicios</a>
            </div>
        </div>
    </div>
</section>

<?= get_footer() ?>