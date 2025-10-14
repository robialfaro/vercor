<?php /* Template Name: Work */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-header-trabaja-con-nosotros.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Trabaja con nosotros</h1>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="site-container">
        <div class="grid col-span-1 md:grid-cols-2 gap-8 mb-18">
            <div>
                <img src="<?= get_template_directory_uri() ?>/images/vercor-trabaja-con-nosotros.jpg" class="object-cover object-center w-full h-full rounded-lg">
            </div>
            <div>
                <div class="flex flex-col justify-center h-full">
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold mb-8">¿Quieres ser parte de nuestro equipo?</h2>
                        <p class="md:text-lg text-gray-600">En VERCOR creemos que las obras se construyen con personas visionarias, apasionadas y con espíritu constructivo. Buscamos talentos que quieran dejar huella en la vida de quienes confían en nosotros para concretar sus proyectos.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-10 lg:p-20 bg-primary-100 rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-8">
                <div class="col-span-2">
                    <p class="md:text-lg">Si compartes nuestro compromiso con la excelencia, la innovación y el desarrollo sostenible, este es tu lugar para crecer y construir un futuro junto a un equipo que transforma ideas en realidades duraderas.</p>
                </div>
                <div class="flex items-center md:justify-end">
                    <div>
                        <a href="#" class="btn btn-primary uppercase">Postula aquí <i data-lucide="external-link"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<?= get_footer() ?>