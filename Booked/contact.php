<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked - CONTACT</title>
    <?php require('inc/links.php');?>
    <style>
        .h-line{
        width: 150px;
        margin: 0 auto;
        height: 1.7px;
        }
    </style>

</head>

<body class="bg-light">

    <?php require('inc/header.php');?> <!-- Header -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        We are always here to assist you. Below, you will find our contact information, and our team is 
        readily available to answer any questions or <br>provide support during your stay. We are at your 
        disposal to ensure your experience is as smooth and enjoyable as possible.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174851.5788563651!2d23.451699436507734!3d46.78350247567033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490c1f916c0b8b%3A0xbbc601c331f148b!2sCluj-Napoca!5e0!3m2!1sro!2sro!4v1736615197467!5m2!1sro!2sro" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/LcoWcTNrcspr8Ny99" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> XYZ, Cluj-Napoca, Booked
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: 0786 535 121" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-outbound-fill"></i>  0786 535 121
                    </a>
                    <br>
                    <a href="tel: 0786 535 121" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-outbound-fill"></i>  0766 444 222
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: ask.booked@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-at-fill"></i> ask.booked@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?> <!-- Footer -->

</body>
</html>