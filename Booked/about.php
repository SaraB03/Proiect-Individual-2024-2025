<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>
    <style>
        .h-line{
        width: 150px;
        margin: 0 auto;
        height: 1.7px;
        }

        .box{
            border-top-color: #2ec1ac !important;
        }
    </style>

</head>

<body class="bg-light">

    <?php require('inc/header.php');?> <!-- Header -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            At our hotel, we prioritize comfort, convenience, and exceptional service to ensure an 
            unforgettable stay. Whether you're <br>here for business or leisure, our team 
            is dedicated to making your experience truly memorable.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">About our team</h3>
                <p>
                    Our team is dedicated to providing you with the highest level of service and hospitality. 
                    From the front desk to housekeeping, every member of our staff is committed to making your stay comfortable
                    and enjoyable. Friendly, professional, and attentive, we're here to ensure your experience exceeds
                    expectations, every step of the way.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="Imagini/About/echipa.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Imagini/About/1.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Imagini/About/2.svg" width="70px">
                    <h4 class="mt-3">300+ Guests</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Imagini/About/3.svg" width="70px">
                    <h4 class="mt-3">100+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Imagini/About/4.svg" width="70px">
                    <h4 class="mt-3">80+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/woman.jpg" class="w-100">
                    <h5 class="mt-2">Chetima Madou</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/woman1.jpg" class="w-100">
                    <h5 class="mt-2">Samira Huseynova</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/woman2.jpg" class="w-100">
                    <h5 class="mt-2">Fabiana Leibl</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/man1.jpg" class="w-100">
                    <h5 class="mt-2">Phil Lynch</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/man2.jpg" class="w-100">
                    <h5 class="mt-2">Ulises Quedo</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/man3.jpg" class="w-100">
                    <h5 class="mt-2">Viana David</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Imagini/About/woman3.jpg" class="w-100">
                    <h5 class="mt-2">Madalina Sinclaire</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('inc/footer.php');?> <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 40,
            pagination: {
            el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

</body>
</html>