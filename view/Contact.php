<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Contact us</title>
    <link rel="stylesheet" href="../assets/css/Contact.css">
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .contact-page{
        display:none;
    }
</style>
<body>
    
        <?php include 'NavbarPage.php' ?>
        <div class="wrap contact-page">
        <div class="w-full h-auto py-14 space-y-4 xl:px-14 lg:px-4 md:px-4 px-4" id="bg-imgs">
            <div class="py-14 text-white text-4xl font-bold">
                Contact Us
            </div>

        </div>
        <!-- Img map -->
        <div class="pb-2 index-60 ">
            <div id="map"></div>
        </div>
        <div class="w-full h-auto py-8 lg:px-6 md:px-4 px-3">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 lg:gap-x-6 lg:space-y-0 md:space-y-1 space-y-1">
                <div class="w-full h-auto border py-4 space-y-6 lg:px-4 md:px-3 px-2">
                    <p class="flex justify-center pt-4">
                        <i class="fas fa-map-marker-alt text-5xl text-green-500 hover:text-green-600 cursor-pointer"></i>
                    </p>
                    <h1 class="text-lg font-semibold">
                        Address
                    </h1>
                    <p>
                        8th Floor, VTRUST Tower, St 169, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh, Cambodia.
                    </p>
                </div>
                <div class="w-full h-auto border py-4 space-y-6 lg:px-4 md:px-3 px-2">
                    <p class="flex justify-center pt-4">
                        <i class="fas fa-envelope text-5xl text-green-500 hover:text-green-600 cursor-pointer"></i>
                    </p>
                    <h1 class="text-lg font-semibold">
                        Email:
                    </h1>
                    <p>
                        CambodiaDigital@1234.com
                    </p>
                </div>
                <div class="w-full h-auto border py-4 space-y-6 lg:px-4 md:px-3 px-2">
                    <p class="flex justify-center pt-4">
                        <i class="fas fa-phone text-5xl text-green-500 hover:text-green-600 cursor-pointer"></i>
                    </p>
                    <h1 class="text-lg font-semibold">
                        Tel:
                    </h1>
                    <p>
                        (+855) 16 41 22 91
                    </p>
                </div>
            </div>

        </div>
        <!-- Footer -->
        <footer>
            <?php include 'Footer.php'; ?>
        </footer>

    </div>
</body>
<script>
      $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.contact-page').fadeIn(1000);
    })
</script>
</html>