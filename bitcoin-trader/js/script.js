$(document).ready(function() {
    $("footer a").on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');

        $('#popup').show();
        $(href).css('display', 'inline-block');

        $('.close, .btn-resp').on('click', function() {
            $(href).css('display', 'none');
            $('#popup').hide();
        });
    });
});