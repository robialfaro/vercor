<?php

/**
 * Includes
 */
require_once get_template_directory() . '/inc/fun_contact_form.php';

/**
 * Carga los archivos CSS del tema
 */
function load_css()
{
    wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css?=' . md5(rand()), array(), '5', 'all');
    wp_enqueue_style('sweetalert2', get_template_directory_uri() . '/assets/sweetalert2/sweetalert2.min.css', array(), '11.26.3', 'all');
}
add_action('wp_enqueue_scripts', 'load_css');


/**
 * Carga los archivos JS del tema
 */
function load_js()
{
    wp_enqueue_script('jquery3.7.1', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('sweetalert2', get_template_directory_uri() . '/assets/sweetalert2/sweetalert2.all.min.js', array(), '11.26.3', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js?=' . md5(rand()), array(), null, true);

    wp_localize_script(
        'app',
        'global',
        array(
            'template_directory_uri' => get_template_directory_uri(),
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );
}
add_action('wp_enqueue_scripts', 'load_js');


/**
 * Carga los archivos JS de Media Uploader
 */
function load_media_files()
{
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'load_media_files');


/**
 * Configuración del tema
 */
function setup()
{

    // Soporte para imagen destacada
    if (function_exists('add_theme_support')) {
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        add_post_type_support('page', 'excerpt');

        // Título dinámico del tema
        add_theme_support('title-tag');

        add_image_size('share-large', 980, 514, array('left', 'top')); // Share social large
        add_image_size('share-medium', 600, 315, array('left', 'top')); // Share social large
        add_image_size('share-small', 200, 200, array('left', 'top')); // Share social small

        add_image_size('post-square-large', 1200, 1200, array('left', 'top', true));
        add_image_size('post-square-medium', 500, 500, array('left', 'top', true));
        add_image_size('post-square-small', 250, 250, array('left', 'top', true));
        add_image_size('post-large', 1200, 675, array('left', 'top', true));
        add_image_size('post-medium', 500, 281, array('left', 'top', true));
        add_image_size('post-small', 250, 140, array('left', 'top', true));
    }
}
add_action('after_setup_theme', 'setup');


/**
 * Registrar Menus
 */
function register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Menú Principal'),
        )
    );
}
add_action('init', 'register_menus');


/**
 * Elimina caracteres especiales al subir un archivo a la biblioteca de medios.
 */
function hash_filename($filename)
{

    $info = pathinfo($filename);
    $ext = empty($info['extension']) ? '' : '.' . $info['extension'];
    $name = basename($filename, $ext);

    $search = array('.', ' ', '_', '—', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
    $replace = array('-', '-', '-', '-', 'A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');

    $sanitize = str_replace($search, $replace, $name);
    $sanitized = preg_replace('/[^a-zA-Z0-9-_.]/', '', $sanitize);

    return 'q-' . strtolower($sanitized . $ext);
}
add_filter('sanitize_file_name', 'hash_filename', 10);


/**
 * Elimina la etiqueta <p> de la descripción de las categorías
 */
remove_filter('term_description', 'wpautop');
