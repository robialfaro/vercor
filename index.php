<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <header>
            <div class="py-5">
                <div class="site-container">
                    <div class="flex justify-between items-center gap-4">
                        <a href="/">
                            <img src="<?= get_template_directory_uri() ?>/images/vercor-logo-color.svg" class="">
                        </a>
                        <div class="flex items-center gap-10">
                            <div class="flex gap-4">
                                <i data-lucide="phone-call" class="stroke-1 text-primary-500 w-9 h-9"></i>
                                <div>
                                    <p class="text-primary-500">Teléfono</p>
                                    <p class="font-medium"><a href="tel:+51 925 283 791">+51 925 283 791</a> - <a href="tel:+51 939 430 180">+51 939 430 180</a></p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <i data-lucide="mail-check" class="stroke-1 text-primary-500 w-9 h-9"></i>
                                <div>
                                    <p class="text-primary-500">Correo</p>
                                    <p class="font-medium"><a href="mailto:info@vercor.com">info@vercor.com</a></p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <a href="http://" target="_blank"><i data-lucide="linkedin" class="fill-secondary-950 stroke-secondary-950 w-6 h-6"></i></a>
                                <a href="http://" target="_blank"><i data-lucide="facebook" class="fill-secondary-950 stroke-secondary-950 w-6 h-6"></i></a>
                                <a href="http://" target="_blank"><i data-lucide="instagram" class="text-secondary-950 w-6 h-6"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="bg-secondary-950">
                <div class="site-container">
                    <div class="flex justify-between items-center gap-5">
                        <ul class="flex items-center gap-5 uppercase font-medium">
                            <li><a href="/" class="text-primary-500 hover:text-primary-500 inline-block py-5 border-b-2 border-b-primary-500 transition-all ease-in-out active">Inicio</a></li>
                            <li><a href="#" class="text-white hover:text-primary-500 inline-block py-5 border-b-2 border-b-secondary-950 hover:border-b-primary-500 transition-all ease-in-out">Nosotros</a></li>
                            <li><a href="#" class="text-white hover:text-primary-500 inline-block py-5 border-b-2 border-b-secondary-950 hover:border-b-primary-500 transition-all ease-in-out">Servicios</a></li>
                            <li><a href="#" class="text-white hover:text-primary-500 inline-block py-5 border-b-2 border-b-secondary-950 hover:border-b-primary-500 transition-all ease-in-out">Proyectos</a></li>
                            <li><a href="#" class="text-white hover:text-primary-500 inline-block py-5 border-b-2 border-b-secondary-950 hover:border-b-primary-500 transition-all ease-in-out">Sostenibilidad</a></li>
                            <li><a href="#" class="text-white hover:text-primary-500 inline-block py-5 border-b-2 border-b-secondary-950 hover:border-b-primary-500 transition-all ease-in-out">Trabaja con nosotros</a></li>
                        </ul>
                        <div>
                            <a href="#" class="btn btn-primary uppercase font-medium">Contacto <i data-lucide="arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="cover relative overflow-hidden bg-secondary-900">
                <div class="overlay absolute top-0 w-full h-full bg-secondary-950/70"></div>
                <img src="<?= get_template_directory_uri() ?>/images/vercor-bg-cover.jpg" class="object-cover object-center w-full">
                <div class="absolute bottom-8 md:bottom-16 xl:bottom-32 2xl:bottom-40 left-0 right-0">
                    <div class="site-container">
                        <h1 class="text-center text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl text-white font-bold">Más allá de las estructuras,<br>impulsamos lo que trasciende</h1>
                    </div>
                </div>
            </section>

            <section class="about bg-primary-50 py-20">
                <div class="site-container">
                    <div class="grid grid-cols-12 gap-8">
                        <div class="col-span-7">
                            <h2 class="text-4xl font-semibold mb-4">Nuestra escencia</h2>
                            <p class="text-xl text-gray-600">Desarrollamos proyectos inmobiliarios que generan valor, creando espacios pensados para nuestros clientes y para el bienestar de la comunidad.</p>

                            <hr class="my-10 border-primary-200">

                            <div class="flex items-start gap-4 mb-10">
                                <div>
                                    <i data-lucide="badge-check" class="w-12 h-12 text-primary-500"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-semibold mb-4">Ingenieros y técnicos calificados</h3>
                                    <p class="text-gray-600">El dominio técnico y la experiencia práctica de nuestro equipo de ingenieros garantizan soluciones eficientes ante los desafíos más complejos.</p>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary uppercase font-medium">Ver más</a>

                        </div>
                        <div class="col-span-5">
                            <img src="https://placehold.jp/720x860.jpg" class="w-full rounded-lg">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            Footer
        </footer>
    </div>

    <?php wp_footer(); ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>