<?php /* Template Name: About */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px] lg:h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-header-about.jpg" class="h-[450px] lg:h-[300px] object-cover object-center w-full">
    <div class="absolute py-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-5xl font-semibold">Nosotros</h1>
        </div>
    </div>
</section>

<section class="site-container">
    <div class="grid grid-cols-2">
        <div>...</div>
        <div>
            <img src="https://placehold.jp/640x416.jpg" class="w-full">
        </div>
        <div>
            <img src="https://placehold.jp/640x416.jpg" class="w-full">
        </div>
        <div>...</div>
    </div>
</section>

<?= get_footer() ?>