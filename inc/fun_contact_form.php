<?php

/**
 * Importamos la biblioteca de validación
 */
require_once get_template_directory() . '/vendor/simple-validator/src/SimpleValidator/Validator.php';

/**
 * Send e-email from contact form.
 */
function send_mail_data()
{

    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    $rules = [
        'first_name' => [
            'required',
            'max_length(50)'
        ],
        'last_name' => [
            'required',
            'max_length(50)'
        ],
        'email' => [
            'required',
            'email',
            'max_length(50)'
        ],
        'phone' => [
            'required',
            'numeric',
            'max_length(9)',
        ],
        'subject' => [
            'required',
            'max_length(50)'
        ],
        'message' => [
            'required',
            'max_length(255)'
        ],
        'accept_terms' => [
            'required'
        ],

    ];

    $naming = [
        'first_name' => 'nombres',
        'last_name' => 'apellidos',
        'email' => 'correo',
        'phone' => 'teléfono',
        'subject' => 'asunto',
        'message' => 'mensaje',
        'accept_terms' => 'terminos y condiciones'
    ];

    $validation = SimpleValidator\Validator::validate($_POST, $rules, $naming);

    if ($validation->isSuccess() == true) {

        $adminmail = "alfarobr@gmail.com"; // EMAIL DE DESTINO
        $subject_mail = '[WEB] ' . $first_name . ' ' . $last_name . ', quiere contactarse'; //asunto
        $headers = "Reply-to: " . $first_name . ' ' . $last_name . " <" . $email . ">";
        $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $first_name . '' . $last_name . ' <' . $email . '>');

        //Cuerpo del mensaje
        //$msg = "<b>Nombre:</b> ".$first_name." <br> <b>Correo:</b> ".$email." <br> <b>Teléfono:</b> ".$phone." <br> <b>Asunto:</b> ".$subject." <br> <b>Mensaje:</b> ".$message;
        $msg = '<table width="80%">
			<tr>
				<td><b>Nombre: </b></td>
				<td>' . $first_name . '</td>
			</tr>
            <tr>
				<td><b>Nombre: </b></td>
				<td>' . $last_name . '</td>
			</tr>
			<tr>
				<td><b>Correo: </b></td>
				<td>' . $email . '</td>
			</tr>
            <tr>
				<td><b>Teléfono: </b></td>
				<td>' . $phone . '</td>
			</tr>
            <tr>
				<td><b>Asunto: </b></td>
				<td>' . $subject . '</td>
			</tr>
			<tr>
				<td><b>Mensaje: </b></td>
				<td>' . $message . '</td>
			</tr>
		</table>';

        $sendmail = wp_mail($adminmail, $subject_mail, $msg, $headers);

        if ($sendmail) {
            echo json_encode([
                'status' => 'success',
                'message' => $first_name . ' ' . $last_name . ', tus datos se han enviado correctamente, nos pondremos en contacto contigo lo antes posible.'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => $first_name . ' ' . $last_name . ', tus datos no se han enviado, contacte al administrador del sitio web.'
            ]);
        }
    } else {

        echo json_encode(
            [
                'status' => 'validate',
                'message' => 'Error de validación.',
                'errors' => $validation->getErrors('es')
            ]
        );
    }

    die();
}

add_action('wp_ajax_nopriv_send_mail_data', 'send_mail_data');
add_action('wp_ajax_send_mail_data', 'send_mail_data');
