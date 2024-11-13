jQuery(document).ready(function($) {
    // Toggle between forms
    $('.toggle-auth').on('click', function(e) {
        e.preventDefault();
        const type = $(this).data('type');
        
        if (type === 'register') {
            $('#loginForm').hide();
            $('#registerForm').show();
        } else {
            $('#registerForm').hide();
            $('#loginForm').show();
        }
    });

    // Handle registration
    $('#registerForm form').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const submitBtn = form.find('button[type="submit"]');
        const password = form.find('input[name="password"]').val();
        const confirmPassword = form.find('input[name="confirm_password"]').val();
        
        // Clear previous messages
        $('.auth-message').remove();

        // Check passwords match
        if (password !== confirmPassword) {
            showMessage('error', 'Passwords do not match');
            return;
        }

        // Disable button and show loading
        submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Processing...');

        // Send AJAX request
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'handle_signup',
                email: form.find('input[name="email"]').val(),
                password: password,
                security: ajax_object.security
            },
            success: function(response) {
                if (response.success) {
                    showMessage('success', 'Registration successful! Redirecting...');
                    setTimeout(function() {
                        window.location.reload();
                    }, 1500);
                } else {
                    showMessage('error', response.data);
                    submitBtn.prop('disabled', false).html('Create Account');
                }
            },
            error: function() {
                showMessage('error', 'Server error. Please try again.');
                submitBtn.prop('disabled', false).html('Create Account');
            }
        });
    });

    // Helper function to show messages
    function showMessage(type, text) {
        const messageHtml = `
            <div class="auth-message ${type}">
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                ${text}
            </div>
        `;
        $('#registerForm form').prepend(messageHtml);
    }
}); 