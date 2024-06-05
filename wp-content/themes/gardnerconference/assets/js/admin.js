jQuery(document).ready(function($) {
    // Add testimonial
    $('.add-testimonial').on('click', function() {
        $(this).prev('.testimonial-repeater-container').append('<li><textarea class="testimonial-field" rows="4"></textarea><button class="remove-testimonial button-secondary">Remove</button></li>');
    });

    // Remove testimonial
    $(document).on('click', '.remove-testimonial', function() {
        $(this).parent('li').remove();
    });
});
