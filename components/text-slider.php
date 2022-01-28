<div class="hero-video-banner">
    <div class="overlay"></div>
    <video id="banner-video" loop="" class="video-background" poster="./assets/img/banner1.jpg" muted="">
        <source src="https://static.videezy.com/system/resources/previews/000/002/719/original/cloudy-sunset.mp4" type="video/mp4">
    </video>
    <div class="text-container">
        <div class="text-carousel owl-carousel">
            <div class="text-carousel-content">
                <h1>Welcome to Australian City International College</h1>
                <p>Here, you’ll find a supportive learning community, great opportunities and a place to belong.</p>
                <a href="#" class="btn btn-danger btn-lg">Explore ACIC</a>
            </div>
        </div>
        <div id="buttonbar">
            <button id="play" class="pause-icon play-icon" onclick="vidplay()"></button>
        </div>
    </div>
</div>
<script>
    function vidplay() {
        var video = document.getElementById("banner-video");
        var button = document.getElementById("play");
        if (video.paused) {
            video.play();
            button.classList.add("play-icon");
        } else {
            video.pause();
            button.classList.remove("play-icon");
        }
    }
</script>