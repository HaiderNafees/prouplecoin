jQuery(document).ready(function($) {
    $('#airdrop-registration-form').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const submitButton = form.find('button[type="submit"]');
        
        submitButton.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Processing...');
        
        $.ajax({
            url: prouple_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'airdrop_registration',
                wallet_address: $('#wallet_address').val(),
                email: $('#email').val(),
                telegram: $('#telegram').val(),
                airdrop_registration_nonce: prouple_ajax.nonce
            },
            success: function(response) {
                if (response.success) {
                    showMessage('success', 'Registration successful! Please check your email for confirmation.');
                    form[0].reset();
                } else {
                    showMessage('error', response.data);
                }
            },
            error: function() {
                showMessage('error', 'An error occurred. Please try again.');
            },
            complete: function() {
                submitButton.prop('disabled', false).html('Submit Details');
            }
        });
    });

    function showMessage(type, message) {
        const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        const alertHtml = `
            <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;
        $('#airdrop-messages').html(alertHtml);
    }
}); 