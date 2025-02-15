jQuery(document).ready(function($) {
    // Toggle popup visibility
    $('.wws-popup__open-btn').click(function() {
        var $popup = $('.wws-popup');
        var $gradient = $('.wws-gradient');

        if ($popup.is(':visible')) {
            $popup.hide();
            $gradient.hide();
        } else {
            $popup.show();
            $gradient.show();
        }
    });

    // Close popup
    $('.wws-popup__close-btn').click(function() {
        $('.wws-popup').hide();
        $('.wws-gradient').hide();
    });

    // Send button click
    $('.wws-popup__send-btn').click(function() {
        sendMessage();
    });

    // Send message on Enter key press
    $('.wws-popup__input').keydown(function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent the default action (e.g., form submission)
            sendMessage();
        }
    });

    function sendMessage() {
        let message = $('.wws-popup__input').val();
        if (message.trim() !== '') {
            // Open WhatsApp Web with message
            //window.open('https://web.whatsapp.com/send?phone=8580407412&text=' + encodeURIComponent(message), '_blank');
            //window.open('https://web.whatsapp.com/send?phone=8580407412&text=' + encodeURIComponent(message) + '&t=' + new Date().getTime(), '_blank');
            
            window.open('https://api.whatsapp.com/send?phone=8580407412&text=' + encodeURIComponent(message) , '_blank');
        }
    }
});

