$(document).ready(function() {
    // Form validation using jQuery
    $('#myForm').submit(function(event) {
        var valid = true;

        // Validate name
        var name = $('#name').val().trim();
        if (name == '') {
            $('#name').addClass('is-invalid');
            valid = false;
        } else {
            $('#name').removeClass('is-invalid');
        }

        // Validate lastname
        var lastname = $('#lastname').val().trim();
        if (lastname == '') {
            $('#lastname').addClass('is-invalid');
            valid = false;
        } else {
            $('#lastname').removeClass('is-invalid');
        }

        // Validate address
        var address = $('#address').val().trim();
        if (address == '') {
            $('#address').addClass('is-invalid');
            valid = false;
        } else {
            $('#address').removeClass('is-invalid');
        }

        // Validate picture file type (JPG, JPEG, PNG, GIF)
        var picture = $('#picture').val().trim();
        var ext = picture.split('.').pop().toLowerCase();
        if ($.inArray(ext, ['jpg', 'jpeg', 'png', 'gif']) == -1) {
            $('#picture').addClass('is-invalid');
            valid = false;
        } else {
            $('#picture').removeClass('is-invalid');
        }

        // Validate cellphone (numeric only)
        var cellphone = $('#cellphone').val().trim();
        if (cellphone == '' || isNaN(cellphone)) {
            $('#cellphone').addClass('is-invalid');
            valid = false;
        } else {
            $('#cellphone').removeClass('is-invalid');
        }

        // Prevent form submission if validation fails
        if (!valid) {
            event.preventDefault();
        }
    });
});