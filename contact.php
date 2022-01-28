<?php $page = 'page';
include('include/header.php'); ?>
<section class="page-title" style="background-image: url('./assets/img/page-title.jpg')">
    <div class="container">
        <h3>Contact Us</h3>
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="index.php">Home</a>
            <span class="breadcrumb-item active">Contact Uss</span>
        </nav>
    </div>
</section>
<div class="inner-page">
    <section class="section-padding">
        <div class="container">
            <!-- CONTACT FORM -->
            <?php include('components/contact-form.php') ?>

            <div class="row company-location">
                <div class="col-sm-12 col-md-5">
                    <div class="company-location-detail">
                        <h4 class="company-location-title">Parramatta</h4>
                        <h5 class="company-location-sub-title mb-2">Address :</h5>
                        <p class="company-location-value">Level 2, 17 Macquarie Street, Parramatta, NSW 2150</p>

                        <h5 class="company-location-sub-title mb-2">Opening Hours :</h5>
                        <p class="company-location-value">9 am to 5 pm <span>(Closed during public holidays)</span></p>

                        <ul class="list-inline company-detail">
                            <li>
                                <h5 class="company-location-sub-title mb-2">Call us on:</h5>
                                <p class="company-location-value">+61 02 780 92811</p>
                            </li>
                            <li>
                                <h5 class="company-location-sub-title mb-2">Email:</h5>
                                <p class="company-location-value"><a href="#">info@acicollege.edu.au</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26511.83242824247!2d151.04939468572974!3d-33.83865081643791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a4b8ce599c85%3A0x5017d681632bac0!2sSydney%20Olympic%20Park%20NSW%202127%2C%20Australia!5e0!3m2!1sen!2snp!4v1614492734169!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="row company-location">
                <div class="col-sm-12 col-md-5">
                    <div class="company-location-detail">
                        <h4 class="company-location-title">Darwin</h4>
                        <h5 class="company-location-sub-title mb-2">Address :</h5>
                        <p class="company-location-value">Level 2, 17 Macquarie Street, Parramatta, NSW 2150</p>

                        <h5 class="company-location-sub-title mb-2">Opening Hours :</h5>
                        <p class="company-location-value">9 am to 5 pm <span>(Closed during public holidays)</span></p>

                        <ul class="list-inline company-detail">
                            <li>
                                <h5 class="company-location-sub-title mb-2">Call us on:</h5>
                                <p class="company-location-value">+61 02 780 92811</p>
                            </li>
                            <li>
                                <h5 class="company-location-sub-title mb-2">Email:</h5>
                                <p class="company-location-value"><a href="#">info@acicollege.edu.au</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26511.83242824247!2d151.04939468572974!3d-33.83865081643791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a4b8ce599c85%3A0x5017d681632bac0!2sSydney%20Olympic%20Park%20NSW%202127%2C%20Australia!5e0!3m2!1sen!2snp!4v1614492734169!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<?php include('include/footer.php'); ?>