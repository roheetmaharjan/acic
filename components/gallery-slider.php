<section class="section-padding pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10">
                <div class="gallery-slider owl-carousel">
                    <div class="gallery-slide">
                        <img src="assets/img/gallery.png" alt="">
                    </div>
                    <div class="gallery-slide">
                        <img src="assets/img/gallery1.png" alt="">
                    </div>
                    <div class="gallery-slide">
                        <img src="assets/img/gallery2.png" alt="">
                    </div>
                    <div class="gallery-slide">
                        <img src="assets/img/gallery3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .gallery-slide {
        min-height: 62rem;
        max-height: 62rem;
        overflow: hidden;
    }
    .gallery-slide img {
        width: auto;
        height: 62rem;
        object-fit: cover;
    }
    .gallery-slider .owl-nav {
        position: absolute;
        width: 100%;
        display: -webkit-flex;
        display: flex;
        justify-content: space-between;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .gallery-slider .owl-nav button.owl-next,
    .gallery-slider .owl-nav button.owl-prev {
        font-size: 0;
        background-color: transparent;
        border: 2px solid #fff;
        border-radius: 0;
        width: 6rem;
        height: 6rem;
        line-height: 6rem;
        padding: 0;
        text-align: center;
        position: relative;
    }

    .gallery-slider .owl-nav button.owl-next span,
    .gallery-slider .owl-nav button.owl-prev span {
        display: none;
    }

    .gallery-slider .owl-nav button.owl-next,
    .gallery-slider .owl-nav button.owl-prev {
        outline: none;
    }
    .gallery-slider .owl-nav button.owl-prev {
        left: 4rem;
    }
    .gallery-slider .owl-nav button.owl-next {
        right: 4rem;
    }

    .gallery-slider .owl-nav button.owl-next:after,
    .gallery-slider .owl-nav button.owl-prev:after {
        content: '';
        display: inline-block;
        margin-top: 0;
        width: 2.5rem;
        height: 2.5rem;
        position: relative;
        top: 1.1rem;
        border-left: 2px solid #fff;
        border-bottom: 2px solid #fff;
    }

    .gallery-slider .owl-nav button.owl-prev:after {
        transform: rotate(45deg);
        left: 0.5rem;
    }

    .gallery-slider .owl-nav button.owl-next:after {
        transform: rotate(220deg);
        right: 0.5rem;
    }
</style>