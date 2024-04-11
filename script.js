$(document).ready(function() {
    $('#fetchActorsButton').click(function(event) {
        $('.response_container').html('<p>Loading</p>');
        // Prevent default button click behavior
        event.preventDefault();

        // Get birthdate value
        var birthdate = $('[name="birthdate"]').val();

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'API_Ops.php',
            data: {birthdate: birthdate},
            success: function(response) {
                // Display actors' names in the response container
                $('.response_container').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Display error message in the response container
                $('.response_container').html('<p>Error occurred. Please try again later.</p>');
            }
        });
    });
});