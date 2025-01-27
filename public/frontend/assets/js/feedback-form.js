(function ($, window, document, undefined) {
    'use strict';

    var $form = $('#contact-form');

    $form.submit(function (e) {
        // Remove the error class
        $('.form-box').removeClass('has-error');
        $('.help-block').remove();

        // Get the form data
        var formData = {
            'name': $('input[name="form-name"]').val(),
            'email': $('input[name="form-email"]').val(),
            'subject': $('input[name="form-subject"]').val(),
            'message': $('textarea[name="form-message"]').val()
        };

        // Process the form
        $.ajax({
            type: 'POST',
            url: '/feedback', // Match this with the route you created in web.php
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            if (!data.success) {
                if (data.errors.name) {
                    $('#form-name').parent('.form-box').addClass('has-error');
                    $('#form-name').parent('.form-box').append('<div class="help-block">' + data.errors.name + '</div>');
                }

                if (data.errors.email) {
                    $('#form-email').parent('.form-box').addClass('has-error');
                    $('#form-email').parent('.form-box').append('<div class="help-block">' + data.errors.email + '</div>');
                }

                if (data.errors.subject) {
                    $('#form-subject').parent('.form-box').addClass('has-error');
                    $('#form-subject').parent('.form-box').append('<div class="help-block">' + data.errors.subject + '</div>');
                }

                if (data.errors.message) {
                    $('#form-message').parent('.form-box').addClass('has-error');
                    $('#form-message').parent('.form-box').append('<div class="help-block">' + data.errors.message + '</div>');
                }
            } else {
                // Display success message
                $form.html('<div class="alert alert-success">' + data.message + '</div>');
            }
        }).fail(function (data) {
            console.log(data);
        });

        e.preventDefault();
    });
})(jQuery, window, document);


