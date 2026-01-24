import $ from 'jquery';
window.$ = window.jQuery = $;


$(document).ready(function() {
    // Mobile menu toggle
    $('#mobile-menu-btn').click(function() {
        $('#mobile-menu').toggleClass('hidden');
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });

    // Navbar background on scroll
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('nav').addClass('bg-slate-900/95');
        } else {
            $('nav').removeClass('bg-slate-900/95');
        }
    });

    // Animate skill bars when in viewport
    function animateSkillBars() {
        $('.skill-bar').each(function() {
            var $this = $(this);
            var skillLevel = $this.data('skill');

            if (isElementInViewport($this[0])) {
                $this.find('.skill-progress').css('width', skillLevel + '%');
            }
        });
    }

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    $(window).on('scroll', animateSkillBars);
    animateSkillBars(); // Initial check

    // Project filter functionality
    $('.filter-btn').click(function() {
        var filter = $(this).data('filter');

        $('.filter-btn').removeClass('bg-primary text-white').addClass('text-gray-400');
        $(this).removeClass('text-gray-400').addClass('bg-primary text-white');

        if (filter === 'all') {
            $('.project-item').fadeIn(300);
        } else {
            $('.project-item').hide();
            $('.project-item[data-category="' + filter + '"]').fadeIn(300);
        }
    });

    // Contact form submission
    $('#contact-form').submit(function(e) {
        e.preventDefault();

        // Simulate form submission
        var $btn = $(this).find('button[type="submit"]');
        var originalText = $btn.text();

        $btn.text('Sending...').prop('disabled', true);

        setTimeout(function() {
            $btn.text('Message Sent!').removeClass('bg-primary').addClass('bg-green-600');
            $('#contact-form')[0].reset();

            setTimeout(function() {
                $btn.text(originalText).removeClass('bg-green-600').addClass('bg-primary').prop('disabled', false);
            }, 3000);
        }, 1500);
    });
});
