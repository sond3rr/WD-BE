<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="assets/img/picon.png" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .oswald {
        font-family: "Oswald", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }

    .poppins {
        font-family: "Poppins", serif;
        font-weight: 250;
        font-style: normal;
    }
</style>

<body style="background-color:#E5E5E5">

    <div class="container-fluid my-5 d-flex align-items-center justify-content-center">
        <div class="row mb-5">
            <div class="col mb-5 ">
                <h1 class="oswald display-1 p-3 text-center wow animate__animated animate__fadeInUp"
                    style="font-size: clamp(70px, 11vw, 400px); font-weight: 600;"><br>Jeronimo Carandang</h1>
                <h1 class="poppins display-1 text-center wow animate__animated animate__fadeInUpBig"
                    style="font-size: clamp(30px, 3vw, 120px); color:#5B5040">Student</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex align-items-center justify-content-center mt-5">
        <div class="row mx-5 mt-5">
            <div class="col d-flex justify-content-center mt-5" style="width: clamp(380px, 70vw, 2000px);">
                <img src="assets/img/me.jpg" class="img-fluid mx-5 wow animate__animated animate__fadeIn"
                    style="border-radius: 8%;">
            </div>
        </div>
    </div>

    <div class="container-fluid px-5 mb-5 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col ">
                <h1 class="oswald display-1 text-center wow animate__animated animate__fadeInUp"
                    style="font-size: clamp(90px, 17vw, 400px); animation-delay: .6s"><br>about</h1>
                <h1 class="poppins display-1 text-center wow animate__animated animate__fadeInUpBig"
                    style="font-size: clamp(15px, 2.5vw, 120px); color:#5B5040;">Hello. I'm a 3rd year student under the
                    program of Bachelor of Science in Information Technology.
                    This
                    portfolio shows my current projects and my progress throughout this semester. I also like dogs.</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="row ">
            <div class="col d-flex justify-content-center mt-3" style="width: clamp(380px, 70vw, 2000px);">
                <div id="galleryCarousel" class="carousel slide wow animate__animated animate__fadeInUp"
                    data-bs-ride="carousel" data-bs-interval="3000" style="border-radius: 12px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/odie1.jpg" class="d-block w-100" style="border-radius: 8%;">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/odie2.jpg" class="d-block w-100" style="border-radius: 8%;">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/odie3.jpg" class="d-block w-100" style="border-radius: 8%;">
                        </div>
                    </div>

                    <div class="carousel-indicators position-relative">
                        <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true"></button>
                        <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col mb-2">
                <h1 class="oswald display-1 text-center wow animate__animated animate__fadeInUp"
                    style="font-size: clamp(90px, 17vw, 400px); animation-delay: .6s"><br>projects</h1>

            </div>
        </div>
    </div>

    <div class="container-fluid d-flex align-items-center justify-content-center my-0 px-5">
        <div class="row d-flex align-items-center justify-content-center g-0" style="height: auto;">
            <div class="col-lg-4 d-flex justify-content-center m-4" style="width: clamp(100px, 60vw, 400px);">
                <a href="A08/index.php" class="image-link">
                    <div class="image-container">
                        <img src="assets/img/iologo.png"
                            class="img-fluid wow animate__animated animate__fadeInUp circle-image dark">
                        <div class="overlay-text">Activity 4</div>
                    </div>
                </a>
            </div>
        </div>
    </div>




    <footer class="footer">
        <div class="owl-carousel">
        </div>
        <div class="footer__redes">
            <ul class="footer__redes-wrapper">
                <li>
                    <a href="https://www.facebook.com/jerome.carandang.965" class="footer__link">
                        <i class="fab fa-facebook-f"></i>
                        facebook
                    </a>
                </li>
                <li>
                    <a href="https://x.com/_misooosoup" class="footer__link">
                        <i class="fab fa-twitter"></i>
                        twitter
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/jerooooome_/" class="footer__link">
                        <i class="fab fa-instagram"></i>
                        instagram
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@TenZ" class="footer__link">
                        <i class="fab fa-instagram"></i>
                        youtube
                    </a>
                </li>
            </ul>
        </div>
        <div class="separador"></div>
        <p class="footer__texto">Jeronimo C. @ 2024</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        new WOW().init(); 
    </script>
    <script>
        new WOW({
            offset: 200,
            mobile: true,
        }).init();
    </script>


</body>

</html>