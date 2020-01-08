addEventListener('submit', function (e) {
    sendEmailToServer(e);
});

function sendEmailToServer(e) {
    e.preventDefault();
    let form = $('form');
    let btn = $('.btn');
    let errorMessage = $('#error-message');
    console.log(form);
    $.ajax({
        url: 'emailHandler.php',
        type: 'POST',
        data: form.serialize(),
        beforeSend: function() {
            btn.html('<i class="fa fa-spinner fa-spin"></i>')
        },
        success: function (response) {
            btn.html('Send');
            errorMessage.removeClass('alert-danger');
            errorMessage.addClass('alert-success');
            errorMessage.text(response.success);
        },
        error: function (response) {
            btn.html('Send');
            errorMessage.removeClass('alert-success');
            errorMessage.addClass('alert-danger');
            errorMessage.text(response.responseJSON.error);
        }
    })
}