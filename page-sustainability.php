<?php /* Template Name: Sustainability */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-green-950/85"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-sostenibilidad.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Sostenibilidad</h1>
        </div>
    </div>
</section>

<section class="bg-green-50 py-20">
    <div class="site-container">
        <div class="max-w-2xl">
            <h2 class="text-2xl text-green-800 md:text-3xl font-semibold mb-3">Comprometidos con un futuro mejor</h2>
            <p class="text-green-900 text-xl">Generamos impacto social y ambiental positivo.</p>
        </div>

        <hr class="border-green-200 my-10">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 md:p-10 bg-green-700 rounded-xl shadow-lg">
                <img src="<?= get_template_directory_uri() ?>/images/responsabilidad-social.jpg" class="rounded-lg mb-8 grayscale-50">
                <h4 class="text-white text-xl md:text-2xl font-semibold mb-4">Responsabilidad social</h4>
                <p class="text-green-100 mb-3">
                    Uno de los pilares fundamentales de nuestra empresa es retribuir a la comunidad los beneficios generados por nuestra productividad, con un enfoque especial en niños y adultos mayores.
                </p>
                <p class="text-green-100">
                    Actualmente nos encontramos en el proceso de creación de una fundación sin fines de lucro, la cual será sostenida con parte de las utilidades provenientes de nuestras operaciones. De esta manera, buscamos integrar a nuestros clientes en nuestra filosofía empresarial y de vida, compartiendo con ellos el propósito de generar un impacto social positivo y duradero.
                </p>
            </div>
            <div class="p-8 md:p-10 bg-green-700 rounded-xl shadow-lg">
                <img src="<?= get_template_directory_uri() ?>/images/responsabilidad-medioambiental.jpg" class="rounded-lg mb-8 grayscale-25">
                <h4 class="text-white text-xl md:text-2xl font-semibold mb-4">Responsabilidad ambiental</h4>
                <p class="text-green-100 mb-3">
                    Somos plenamente conscientes de los efectos del cambio climático y de las consecuencias que este puede tener en las generaciones futuras.
                </p>
                <p class="text-green-100">
                    Hemos asumido el compromiso de desarrollar nuestras operaciones bajo principios de sostenibilidad, aplicando la estrategia de las “3R” del reciclaje: Reducir, Reutilizar y Reciclar. Esta práctica nos permite minimizar la generación de residuos, optimizar el uso de recursos y contribuir activamente a la protección de nuestro planeta.
                </p>
            </div>
        </div>
    </div>
</section>

<?= get_footer() ?>