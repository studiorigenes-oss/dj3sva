(function($) {
    'use strict';

    $(document).ready(function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        }

        // Menu Toggle
        const $menuToggle = $('.menu-toggle');
        const $menuOverlay = $('.menu-overlay');
        const $header = $('.site-header');

        $menuToggle.on('click', function() {
            $(this).toggleClass('active');
            $menuOverlay.toggleClass('active');
            $('body').toggleClass('no-scroll');

            if ($(this).hasClass('active')) {
                $(this).find('.menu-text').text('CLOSE');
            } else {
                $(this).find('.menu-text').text('MENU');
            }
        });

        // Close menu on link click
        $('.overlay-menu-list a').on('click', function() {
            $menuToggle.removeClass('active');
            $menuOverlay.removeClass('active');
            $('body').removeClass('no-scroll');
            $menuToggle.find('.menu-text').text('MENU');
        });

        // Header scroll effect
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        });

        // Form Submission (Mockup)
        $('#minimal-contact-form').on('submit', function(e) {
            e.preventDefault();
            const $btn = $(this).find('.submit-btn');
            const originalText = $btn.text();
            
            $btn.text('SENDING...').prop('disabled', true);
            
            // Simulate AJAX
            setTimeout(function() {
                $btn.text('MESSAGE SENT').css('background', '#27ae60');
                $('#minimal-contact-form')[0].reset();
                
                setTimeout(function() {
                    $btn.text(originalText).prop('disabled', false).css('background', '#fff');
                }, 3000);
            }, 1500);
        });

        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(event) {
            const target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });

})(jQuery);
