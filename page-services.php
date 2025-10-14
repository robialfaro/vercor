<?php /* Template Name: Services */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-header-services.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Servicios</h1>
        </div>
    </div>
</section>

<section class="services bg-white py-20">
    <div class="site-container">
        <div class="max-w-2xl">
            <h2 class="text-2xl md:text-3xl font-semibold">Impulsamos nuestros servicios en los siguientes sectores</h2>
        </div>

        <hr class="border-gray-100 my-10">

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

<section class="bg-white py-20">
    <div class="site-container">
        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('https://placehold.jp/1280x500.jpg')">
            <div class="overlay absolute top-0 bottom-0 left-0 right-0 bg-linear-to-r from-slate-900/90 via-slate-900/80 to-slate-900/50"></div>
            <div class="relative px-10 py-20 md:py-28">
                <h4 class="text-white md:text-lg md:max-w-1/2 mb-8">Creamos espacios eficientes y, sobre todo, seguros, cumpliendo rigurosamente con las normas estructurales para garantizar el bienestar de la comunidad.</h4>
                <a href="#" class="btn btn-primary uppercase">Ver proyectos</a>
            </div>
        </div>
    </div>
</section>

<?= get_footer() ?>