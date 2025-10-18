$(document).ready(function () {
    // Send form contact 
    $('.send-contact').on('click', function (event) {

        event.preventDefault();

        var form = $('#contact-form'),
            data_form = form.serializeArray(),
            data = [],
            errors = '';

        $.each(data_form, function (i, field) {
            data[field.name] = field.value;
        });

        var dialog = Swal.fire({
            icon: 'info',
            html: '',
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            cancelButtonText: 'Cerrar',
            backdrop: 'rgba(0, 0, 0, 0.94)'
        });

        $.ajax({
            url: global.ajaxurl,
            data: {
                action: 'send_mail_data',
                first_name: data.first_name,
                last_name: data.last_name,
                email: data.email,
                phone: data.phone,
                subject: data.subject,
                message: data.message,
                accept_terms: data.accept_terms
            },
            type: 'POST',
            beforeSend: function () {
                dialog.update({
                    html: '<div class="alert-info text-left">Enviando mensaje...</div>',
                })
            },
            success: function (response) {

                response = $.parseJSON(response);

                if (response.status == 'success') {
                    dialog.update({
                        icon: 'success',
                        html: '<div class="alert-success text-left">' + response.message + '</div>',
                    });
                    form.trigger('reset');
                }

                if (response.status == 'error') {
                    dialog.update({
                        icon: 'error',
                        html: '<div class="alert-danger text-left">' + response.message + '</div>',
                    });
                }

                if (response.status == 'validate') {

                    $.each(response.errors, function (i, error) {
                        errors += '<li>' + error + '.</li>';
                    });

                    dialog.update({
                        icon: 'warning',
                        html: '<div class="alert-warning"><ul class="text-left">' + errors + '</ul></div>',
                        showCancelButton: true,
                        cancelButtonText: 'Corregir',
                    });
                }

            },
            error: function (jqXHR, textStatus, errorThrown) {

                dialog.update({
                    icon: 'error',
                    html: '<div class="alert-error text-left"> Error ' + jqXHR.status + ': ' + jqXHR.statusText + '</div>',
                    showCancelButton: true,
                    cancelButtonText: 'Corregir',
                });
                //console.log(jqXHR);
            }
        });
    });
});