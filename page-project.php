<?php /* Template Name: Project */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[600px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="https://placehold.jp/1920x600.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <p class="text-gray-100 text-2xl font-semibold mb-3">Proyecto</p>
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Lorem ipsum dolor sit amet consectetur lectus felis eget</h1>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="site-container">
        <div class="grid grid-cols-2 gap-2">
            <div>
                <img src="https://placehold.jp/1280x720.jpg" class="aspect-[4/3] object-cover object-center w-full h-full">
            </div>
            <div>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <img src="https://placehold.jp/1280x720.jpg" class="aspect-[4/3] object-cover object-center w-full h-full">
                    </div>
                    <div>
                        <img src="https://placehold.jp/1280x720.jpg" class="aspect-[4/3] object-cover object-center w-full h-full">
                    </div>
                    <div>
                        <img src="https://placehold.jp/1280x720.jpg" class="aspect-[4/3] object-cover object-center w-full h-full">
                    </div>
                    <div>
                        <img src="https://placehold.jp/1280x720.jpg" class="aspect-[4/3] object-cover object-center w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-50 py-20">
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