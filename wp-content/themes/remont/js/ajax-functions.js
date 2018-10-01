$(document).ready(function () {

    // This does the ajax request
    $('#review-submit').click(function () {
        $.ajax({
            url: '//remont.test/wp-admin/admin-ajax.php',
            method: 'POST',
            data: {
                action: 'review_callback',
                name: $('#review_name').val(),
                application: $('#review_text').val(),
                number_tel: $('#review_tel').val()
            },
            success:function(data) {
                $('#ajax-text-response').text(data);
                $('#thank_application').css('display', 'block');
                $('#reviews').css('display', 'none');
                $('#application').css('display', 'none');
            }
        });
    });
    
    $('#zayavka-submit').click(function () {
        $.ajax({
            url: '//remont.test/wp-admin/admin-ajax.php',
            method: 'POST',
            data: {
                action: 'zayavka_callback',
                name: $('#zayavka_name').val(),
                application: $('#zayavka_text').val(),
                number_tel: $('#zayavka_tel').val()
            },
            success:function(data) {
                $('#ajax-text-response').text(data);
                $('#thank_application').css('display', 'block');
                $('#reviews').css('display', 'none');
                $('#application').css('display', 'none');
            }
        });
    });

});