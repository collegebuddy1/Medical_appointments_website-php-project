$(document).ready(function() {
    $('.filters li').on('click', function() {
        var category = $(this).data('category');
        
        $('.card').each(function() {
            if (category === undefined || category === 'medecin' || $(this).data('category') === category) {
                $(this).slideDown();
            } else {
                $(this).slideUp();
            }
        });
    });
});
