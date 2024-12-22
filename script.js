$(document).ready(function() {
    $('#registration-form').on('submit', function(e) {
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var dob = $('#dob').val();
        var address = $('#address').val();
        
        // Simple form validation
        if (name == '' || email == '' || phone == '' || dob == '' || address == '') {
            alert('All fields are required.');
            e.preventDefault();
            return false;
        }
        
        // Check if email is valid
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            e.preventDefault();
            return false;
        }
    });
});
