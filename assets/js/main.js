(function ($) {



    $(document).ready(function() {
        function vidplay() {
            var video = document.getElementById("banner-video");
            var button = document.getElementById("playvid");
            if (video.paused) {
                video.play();
                button.classList.remove("play-icon");
            } else {
                video.pause();
                button.classList.add("play-icon");
            }
        }
        $("#playvid").on("click",function(){
            vidplay();
        });

        /* For Testimonial Slider */
        $('.owl-carousel.testimonial-slider').owlCarousel({
            loop: false,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })


        /* To stick navbar at top when scroll */
        function fixedScroll(){
            var header = $("#navbar");

            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                header.addClass("scroll-to-fixed-fixed");
            } else {
                header.removeClass("scroll-to-fixed-fixed");
            }
        }

        fixedScroll();

        $(function() {
            
            $(window).scroll(function() {    
                fixedScroll();
            });

        });


        /*smooth scrolling*/
        $('.smoothScroll').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 150
                    }, 1000);
                    return false;
                }
            }
        });


        /* FAQ Accordion */
        const items = document.querySelectorAll(".accordion .head");

        function toggleAccordion() {
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));

        /* Form labels Version 2 */
        const inputs = document.querySelectorAll(".form-control");

        function addcl(){
            let closest = this.closest(".form-group");
            closest.classList.add("focus");
        }
        function remcl(){
            let closest = this.closest(".form-group");
            if(this.value == ""){
                closest.classList.remove("focus");
            }
        }
        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });


        /* For choose file */
        $('.form-control-file').focus(function () {
            $(this).closest( ".form-group" ).addClass('focus');
        })

        /* Gallery */
        $('.video-gallery,.single-column-gallery').magnificPopup({
            delegate: 'a', 
            type: 'iframe',
            gallery:{
                enabled:true
            },
            removalDelay: 500, /* delay removal by X to allow out-animation */
            callbacks: {
                beforeOpen: function() {
                    /* just a hack that adds mfp-anim class to markup */
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            closeOnContentClick: true,
            midClick: true 
        });


        /* Parallax */
        $('.parallax-window').parallax();

        /* Menu */
        $(".menu-mobile-collapse-trigger").click(function(){
            $( this ).toggleClass( "active" );
            $(".responsive-menu-wrp").toggleClass("show");
        });
    
        /* covid top bar notice */
        function checkCovideLS(){
            let acic_notice = localStorage.getItem('acic_notice');
            if(acic_notice=='yes'){
                $("#co_alert").addClass("d-none");
            }else{
                $("#co_alert").removeClass("d-none");
            }
        }

        function setCovideLS(){
            localStorage.setItem('acic_notice', 'yes');
        }

        checkCovideLS();

        $("#close_co").on('click', function(){
            setCovideLS();
        });

    });


})(jQuery); 