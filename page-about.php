<?php /* Template Name: About */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-header-about.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Nosotros</h1>
        </div>
    </div>
</section>

<section>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-200 order-1 relative">
            <div class="flex flex-col justify-center h-full">
                <div class="py-20 p-10 md:px-14 lg:px-20">
                    <h2 class="text-2xl md:text-3xl font-semibold mb-3">Historia</h2>
                    <p class="text-gray-600 md:text-lg">Somos un grupo empresarial peruano con más de una década de experiencia en el sector construcción. Iniciamos nuestras actividades en 2010 bajo el nombre Miluglama Contratistas S.A.C., enfocándonos en la ejecución de edificaciones para el sector privado.</p>
                </div>
            </div>
            <i data-lucide="triangle" class="hidden md:block absolute left-full top-2/4 fill-gray-200 stroke-gray-200 w-10 h-10 rotate-90 translate-x-[-10px] translate-y-[-50%]"></i>
            <i data-lucide="triangle" class="md:hidden absolute top-full right-2/4 fill-gray-200 stroke-gray-200 w-10 h-10 rotate-180 translate-y-[-10px] translate-x-[50%]"></i>
        </div>
        <div class="order-2">
            <img src="<?= get_template_directory_uri() ?>/images/vercor-acerca-de-historia.jpg" class="object-cover object-center h-full w-full">
        </div>
        <div class="order-4 md:order-3">
            <img src="<?= get_template_directory_uri() ?>/images/vercor-acerca-de-ahora.jpg" class="object-cover object-center h-full w-full">
        </div>
        <div class="bg-primary-500 order-3 md:order-4 relative">
            <div class="flex flex-col justify-center flex-nowrap h-full">
                <div class="py-20 p-10 md:px-14 lg:px-20">
                    <h2 class="text-4xl md:text-5xl lg:text-7xl text-white font-semibold mb-4"><span class="text-xl font-normal">Ahora somos</span><br> VERCOR</h2>
                    <p class="text-primary-100 md:text-lg">Hoy, bajo el nombre VERCOR Construcciones, hemos evolucionado con la visión de renovar, expandir y diversificar nuestra propuesta, consolidándonos como una empresa sólida, innovadora y con compromiso social.</p>
                </div>
            </div>
            <i data-lucide="triangle" class="hidden md:block absolute right-full top-2/4 fill-primary-500 stroke-primary-500 w-10 h-10 -rotate-90 translate-x-[10px] translate-y-[-50%]"></i>
            <i data-lucide="triangle" class="md:hidden absolute top-full right-2/4 fill-primary-500 stroke-primary-500 w-10 h-10 rotate-180 translate-y-[-10px] translate-x-[50%]"></i>
        </div>
    </div>
</section>

<section class="bg-primary-50 py-20">
    <div class="site-container">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-4xl font-semibold mb-3">Nuestros principios definen quiénes somos</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="p-10 bg-white rounded-lg">
                <h4 class="text-xl font-semibold mb-4">Misión</h4>
                <p class="text-gray-600 md:text-lg">En Vercor, desarrollamos proyectos inmobiliarios, industriales y públicos con altos estándares de calidad, eficiencia y responsabilidad, creando espacios que generan valor duradero para nuestros clientes y la comunidad. Nos comprometemos a construir con excelencia, fieles a nuestros valores y filosofía, para aportar soluciones sostenibles que impulsen el progreso colectivo.</p>
            </div>
            <div class="p-10 bg-white rounded-lg">
                <h4 class="text-xl font-semibold mb-4">Visión</h4>
                <p class="text-gray-600 md:text-lg">Al 2030 ser referentes en el sector de la construcción, liderando con eficacia y compromiso en la creación de estructuras sólidas, sostenibles y de alto impacto social. Aspiramos a contribuir al desarrollo humano, la prosperidad compartida y el bienestar de las comunidades, generando un legado positivo para las generaciones presentes y futuras.</p>
            </div>
        </div>

    </div>
</section>

<section class="py-20">
    <div class="site-container">
        <div class="p-10 lg:p-20 bg-primary-100 rounded-lg">
            <h2 class="text-2xl md:text-4xl font-semibold mb-3">Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-8">
                <div class="col-span-2">
                    <p class="text-gray-600 md:text-lg">Nos especializamos en brindar servicios integrados de ingeniería y construcción en proyectos de inversión privada y pública, apostando siempre por la seguridad, calidad, eficiencia y la sostenibilidad.</p>
                </div>
                <div class="flex items-center md:justify-end">
                    <div>
                        <a href="<?= get_site_url() ?>/servicios" class="btn btn-primary uppercase">Ver servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden h-[320px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-sostenibilidad.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute bottom-0 top-0 left-0 right-0">
        <div class="site-container h-full">
            <div class="h-full flex flex-col justify-center">
                <div class="text-center">
                    <h1 class="text-white text-3xl md:text-4xl font-semibold mb-8">Promovemos el desarrollo de las comunidades</h1>
                    <a href="#" class="btn btn-primary uppercase">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-50 py-20">
    <div class="site-container">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-4xl font-semibold mb-3">Nuestra gestión constructiva se basa en dos pilares fundamentales</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="p-10 bg-white rounded-lg">
                <h4 class="text-xl font-semibold mb-4">1. Normas ISO</h4>
                <p class="text-gray-600 md:text-lg mb-4">Aplicamos los más altos estándares internacionales establecidos por la Organización Internacional de Normalización (ISO)</p>
                <ul class="text-gray-600 md:text-lg">
                    <li>- ISO 9001: Gestión de calidad.</li>
                    <li>- ISO 14001: Gestión ambiental.</li>
                    <li>- ISO 45001: Seguridad y salud en el trabajo.</li>
                </ul>
            </div>
            <div class="p-10 bg-white rounded-lg">
                <h4 class="text-xl font-semibold mb-4">2. Lean Construction</h4>
                <p class="text-gray-600 md:text-lg">Adoptamos la metodología Lean Construction, una filosofía de gestión de proyectos que tiene como objetivo maximizar el valor para el cliente y reducir al mínimo los desperdicios durante todo el proceso constructivo, promoviendo así una mayor eficiencia, colaboración y sostenibilidad.</p>
            </div>
        </div>

    </div>
</section>

<section class="bg-white py-20">
    <div class="site-container">
        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('<?= get_template_directory_uri() ?>/images/projects/residencial-atika.jpg')">
            <div class="overlay absolute top-0 bottom-0 left-0 right-0 bg-linear-to-r from-slate-900/90 via-slate-900/80 to-slate-900/50"></div>
            <div class="relative px-10 py-20 md:py-28">
                <h4 class="text-white md:text-lg md:max-w-1/2 mb-8">Creamos espacios eficientes y, sobre todo, seguros, cumpliendo rigurosamente con las normas estructurales para garantizar el bienestar de la comunidad.</h4>
                <a href="<?= get_site_url() ?>/proyectos" class="btn btn-primary uppercase">Ver proyectos</a>
            </div>
        </div>
    </div>
</section>

<?= get_footer() ?>