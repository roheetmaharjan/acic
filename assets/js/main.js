
$(document).ready(function() {
    //For Testimonial Slider 
    $('.owl-carousel.testimonial-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
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
    $(function() {
        var header = $("#navbar");
      
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                header.addClass("scroll-to-fixed-fixed");
            } else {
                header.removeClass("scroll-to-fixed-fixed");
            }
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


    //FAQ Accordion
    const items = document.querySelectorAll(".accordion .head");

    function toggleAccordion() {
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
    }
    
    items.forEach(item => item.addEventListener('click', toggleAccordion));


    //Form labels
    // const inputs = document.querySelectorAll(".form-control");

    // function addcl(){
    //     let parent = this.parentNode.parentNode;
    //     parent.classList.add("focus");
    // }
    // function remcl(){
    //     let parent = this.parentNode.parentNode;
    //     if(this.value == ""){
    //         parent.classList.remove("focus");
    //     }
    // }
    // inputs.forEach(input => {
    //     input.addEventListener("focus", addcl);
    //     input.addEventListener("blur", remcl);
    // });


    //Form labels Version 2
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


    //For choose file
    $('.form-control-file').focus(function () {
        $(this).closest( ".form-group" ).addClass('focus');
    })

    //Gallery
    $('.video-gallery,.single-column-gallery').magnificPopup({
        delegate: 'a', 
        type: 'iframe',
        gallery:{
            enabled:true
        },
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {
            // just a hack that adds mfp-anim class to markup 
            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
            this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        closeOnContentClick: true,
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
    });

    //Parallax
    // $('.paroller').paroller();

    //Parallax
    $('.parallax-window').parallax();

    //Menu 
    $(".menu-mobile-collapse-trigger").click(function(){
        $( this ).toggleClass( "active" );
        $(".menu-links").toggleClass("show");
    });
});


