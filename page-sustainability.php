<?php /* Template Name: Sustainability */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-sostenibilidad.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Sostenibilidad</h1>
        </div>
    </div>
</section>

<section>
    <div class="bg-primary-50 py-20">
        <div class="site-container">
            <div class="max-w-2xl">
                <h2 class="text-2xl md:text-3xl font-semibold mb-4">Comprometidos con un futuro mejor</h2>
                <p class="text-gray-600 text-xl">Generando impacto social y ambiental positivo.</p>
            </div>
        </div>
    </div>

    <div class="site-container">
        <div class="py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-xl md:text-2xl font-semibold mb-6">Responsabilidad social</h4>
                    <img src="https://placehold.jp/800x400.jpg" class="rounded-lg mb-6">
                    <p class="text-gray-600 md:text-lg mb-3">
                        Uno de los pilares fundamentales de nuestra empresa es retribuir a la comunidad los beneficios generados por nuestra productividad, con un enfoque especial en niños y adultos mayores.
                    </p>
                    <p class="text-gray-600 md:text-lg">
                        Actualmente nos encontramos en el proceso de creación de una fundación sin fines de lucro, la cual será sostenida con parte de las utilidades provenientes de nuestras operaciones. De esta manera, buscamos integrar a nuestros clientes en nuestra filosofía empresarial y de vida, compartiendo con ellos el propósito de generar un impacto social positivo y duradero.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl md:text-2xl font-semibold mb-6">Responsabilidad medioambiental</h4>
                    <img src="https://placehold.jp/800x400.jpg" class="rounded-lg mb-6">
                    <p class="text-gray-600 md:text-lg mb-3">
                        Somos plenamente conscientes de los efectos del cambio climático y de las consecuencias que este puede tener en las generaciones futuras.
                    </p>
                    <p class="text-gray-600 md:text-lg">
                        Hemos asumido el compromiso de desarrollar nuestras operaciones bajo principios de sostenibilidad, aplicando la estrategia de las “3R” del reciclaje: Reducir, Reutilizar y Reciclar. Esta práctica nos permite minimizar la generación de residuos, optimizar el uso de recursos y contribuir activamente a la protección de nuestro planeta.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= get_footer() ?>