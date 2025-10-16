<?php /* Template Name: Contact */ ?>

<?= get_header() ?>

<section class="page-header relative overflow-hidden bg-secondary-900 h-[300px]">
    <div class="overlay absolute top-0 w-full h-full bg-slate-900/70"></div>
    <img src="<?= get_template_directory_uri() ?>/images/vercor-header-contacto.jpg" class="object-cover object-center w-full h-full">
    <div class="absolute pb-20 bottom-0 left-0 right-0">
        <div class="site-container">
            <h1 class="text-white text-4xl md:text-5xl font-semibold">Contacto</h1>
        </div>
    </div>
</section>

<div class="py-20">
    <div class="site-container">
        <form action="#" autocomplete="off">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="grid gap-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-medium mb-2">Nombres</label>
                                <input type="text" id="first_name" class="form-input border-gray-300 shadow-sm focus:border-primary-200 focus:ring focus:ring-primary-200 focus:ring-opacity-50 w-full">
                            </div>
                            <div>
                                <label class="block font-medium mb-2">Apellidos</label>
                                <input type="text" id="last_name" class="form-input border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 w-full">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block font-medium mb-2">Correo</label>
                                <input type="text" id="last_name" class="form-input border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 w-full">
                            </div>
                            <div>
                                <label class="block font-medium mb-2">Teléfono</label>
                                <input type="text" id="last_name" class="form-input border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 w-full">
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block font-medium mb-2">Asunto</label>
                        <select type="text" id="subject" class="form-select border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 w-full">
                            <option value="">--Seleccione--</option>
                            <option value="">Administrativo</option>
                            <option value="">Cotización</option>
                            <option value="">Operaciones</option>
                            <option value="">Sostenibilidad</option>
                            <option value="">Otros</option>
                        </select>
                    </div>

                    <div class="mt-6">
                        <label class="block font-medium mb-2">Mensasje</label>
                        <textarea type="text" id="message" class="form-textarea shadow-sm border-gray-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 w-full" rows="5"></textarea>
                    </div>

                    <div class="mt-6">
                        <label class="block cursor-pointer mb-2">
                            <input type="checkbox" id="accept_terms" class="form-checkbox shadow-sm mr-2 accent-primary-500 border-gray-300 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                            Acepto los términos y condiciones.
                        </label>
                    </div>

                    <input type="submit" class="btn btn-primary mt-6 cursor-pointer" value="Enviar">

                </div>
                <div>
                    <img src="<?= get_template_directory_uri() ?>/images/vercor-contacto.jpg" class="object-cover object-center w-full h-full rounded-lg">
                </div>
            </div>
        </form>
    </div>
</div>

<?= get_footer() ?>