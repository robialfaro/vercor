<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <?php wp_head(); ?>
</head>

<body class="scroll-smooth">

    <div id="page" class="site">
        <header>
            <div class="py-5 hidden lg:block">
                <div class="site-container">
                    <div class="flex justify-between items-center gap-4">
                        <a href="/">
                            <img src="<?= get_template_directory_uri() ?>/images/vercor-logo-color.svg">
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
                                <a href="#" target="_blank"><i data-lucide="linkedin" class="fill-secondary-950 stroke-secondary-950 w-6 h-6"></i></a>
                                <a href="#" target="_blank"><i data-lucide="facebook" class="fill-secondary-950 stroke-secondary-950 w-6 h-6"></i></a>
                                <a href="#" target="_blank"><i data-lucide="instagram" class="text-secondary-950 w-6 h-6"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="bg-secondary-950 hidden lg:block">
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

            <!-- Nav mobile -->
            <div class="py-5 bg-secondary-950 lg:hidden">
                <div class="site-container">
                    <div class="flex justify-between items-center">
                        <div>
                            <i data-lucide="menu" class="text-white"></i>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/images/vercor-iso-blanco.svg" class="fill-white h-8">
                        </div>
                        <div>
                            <i data-lucide="share-2" class="text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>