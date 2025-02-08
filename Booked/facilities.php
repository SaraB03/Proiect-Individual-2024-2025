<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked - FACILITIES</title>
    <?php require('inc/links.php');?>
    <style>
        .h-line{
        width: 150px;
        margin: 0 auto;
        height: 1.7px;
        }

        .pop:hover{
            border-top-color: #2ec1ac !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>

<body class="bg-light">

    <?php require('inc/header.php');?> <!-- Header -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        Our hotel features a luxurious spa, outdoor pool, modern fitness center, and on-site dining. 
        Enjoy high-speed Wi-Fi, <br>spacious rooms, and 24-hour concierge service—perfect for relaxation or business.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="imagini/Features/1.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Our hotel offers fast and reliable Wi-Fi throughout the property, 
                        ensuring you stay connected whether you're in your room, the lobby, or by the pool. 
                        Perfect for work or leisure.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="imagini/Features/2.svg" width="40px">
                        <h5 class="m-0 ms-3">Air Conditioner</h5>
                    </div>
                    <p>
                    Our hotel features modern air conditioning systems in all rooms, 
                    allowing guests to adjust the temperature to their preference for a comfortable and 
                    relaxing stay year-round.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="imagini/Features/3.svg" width="40px">
                        <h5 class="m-0 ms-3">Television</h5>
                    </div>
                    <p>
                        Our hotel rooms are equipped with flat-screen televisions, offering a wide range of channels 
                        for your entertainment. Whether you prefer watching movies, sports, or news, you'll  
                        enjoy the viewing.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="imagini/Features/4.svg" width="40px">
                        <h5 class="m-0 ms-3">EV and Parking</h5>
                    </div>
                    <p>
                    Our hotel offers convenient parking with ample space for guests, including designated 
                    spots for electric vehicles. The EV station allows our guests to charge 
                    their vehicles during their stay.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="imagini/Features/5.svg" width="40px">
                        <h5 class="m-0 ms-3">Restaurants</h5>
                    </div>
                    <p>
                    Our hotel features a cozy café-bar where guests can enjoy a variety of drinks and 
                    light bites. For a more formal dining experience, our on-site 
                    restaurant offers a diverse menu of delicious dishes.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="imagini/Features/6.svg" width="40px">
                        <h5 class="m-0 ms-3">Pool and Spa</h5>
                    </div>
                    <p>
                    Our hotel features a tranquil outdoor pool, perfect for a relaxing swim or lounging 
                    under the sun. For ultimate relaxation, our on-site spa offers a range of treatments, 
                    including massages and facials.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?> <!-- Footer -->

</body>
</html>