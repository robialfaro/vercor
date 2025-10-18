<?php
/**
 * :attribute => input name
 * :params => rule parameters ( eg: :params(0) = 10 of max_length(10) )
 */
return array(
    'required' => 'El campo :attribute es obligatorio',
    'integer' => 'El campo :attribute debe ser un número entero',
    'float' => 'El campo :attribute debe ser un número decimal',
    'numeric' => 'El campo :attribute debe ser numérico',
    'email' => 'El campo :attribute no es un correo valido',
    'alpha' => 'El campo :attribute debe contener letras',
    'alpha_numeric' => 'El campo :attribute debe contener letras y números',
    'ip' => 'El campo :attribute debe contener una IP válida',
    'url' => 'El campo :attribute debe contener una URL válida',
    'max_length' => 'El campo :attribute puede tener una longitud máxima de :params(0) caracteres',
    'min_length' => 'El campo :attribute puede tener una longitud mínima de :params(0) caracteres',
    'exact_length' => 'El campo :attribute puede tener una longitud de :params(0) caracteres',
    'equals' => 'El campo :attribute debe ser el mismo que :params(0)'
);
