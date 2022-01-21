<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>About us</title>
    <link rel="stylesheet" href="../assets/css/Contact.css">
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .about-page{
        display:none;
    }
    .counter {
  animation-duration: 1s;
  animation-delay: 0s;
}
</style>
<body>
   
        <?php include 'NavbarPage.php' ?> 
        <div class="wrap about-page">
        <div class="w-full h-auto py-14 space-y-4 xl:px-14 lg:px-4 md:px-4 px-4" id="bg-imgs">
            <div class="py-14 text-white text-4xl font-bold">
                About Us
            </div>
        </div>

        <div class="w-full h-auto py-9 space-y-9">
            <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 lg:space-y-0 md:space-y-6 space-y-6">
                <div class="w-full h-auto col-span-2 lg:px-8 md:px-4 px-4 py-2 space-y-7">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, aliquam. Sapiente consectetur eum totam delectus error est in alias molestias dolore natus voluptas, recusandae, iure vitae enim soluta rem obcaecati.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem id dicta praesentium doloremque quidem nobis tenetur pariatur repellendus culpa saepe totam delectus, aliquid eaque ea natus odio repellat iste doloribus.
                    </p>
                    <h1 class="text-2xl uppercase font-semibold">Version</h1>
                    <p>
                        “BE A RECOGNIZED AND TRUSTED professional body of accountancy in the region”.
                    </p>
                    <h1 class="text-2xl uppercase font-semibold">
                        MISION
                    </h1>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo qui illum nesciunt, assumenda quas nostrum voluptatum ullam incidunt illo. Officia magni debitis distinctio consequatur assumenda nostrum quas suscipit similique odit?
                    </p>
                    <h1 class="text-2xl uppercase font-semibold">
                        CORE VALUES: F.A.I.R
                    </h1>
                    <ul class="pl-5">
                        <li class="space-x-2 list-disc">
                            <span class="font-semibold">Fairness :</span>
                            <span> the Institute will be committed to treating all types of members in a fair, impartial and consistent manner;</span>
                        </li>
                        <li class="space-x-2 list-disc">
                            <span class="font-semibold">Accountability :</span>
                            <span> the Institute will accept responsibility for their actions and decisions;</span>
                        </li>
                        <li class="space-x-2 list-disc">
                            <span class="font-semibold">Integrity :</span>
                            <span> the Institute will act in an honest, ethical, and professional manner in all endeavors, and fully disclose all information;</span>
                        </li>
                        <li class="space-x-2 list-disc">
                            <span class="font-semibold">Respect :</span>
                            <span> the Institute will be responsive, considerate, and courteous to all members and to the public.</span>
                        </li>
                    </ul>
                </div>
                <div class="w-full col-span-1 px-4">
                    <img src="../assets/img/undraw_product_tour_re_8bai.svg">
                </div>
            </div>
            <div class="w-full lg:px-8 md:px-0 px-0">
                <div class="bg-gray-200 w-full lg:h-44 md:h-auto h-auto flex justify-between items-center lg:px-14 md:px-48 px-48 lg:flex-row md:flex-col flex-col py-8 lg:space-y-0 md:space-y-20 space-y-20">

                    <!-- Jobs -->
                    <div class="w-full space-x-5 flex items-center">
                        <i class="fas fa-bullhorn text-4xl text-green-400"></i>
                        <span class="font-semibold space-y-2">
                            <p class="lg:text-5xl md:text-4xl text-4xl font-semibold counter">50</p>
                            <p class="text-xl font-semibold">JOBS</p>
                        </span>
                    </div>
                    <!-- All Resumes -->
                    <div class="w-full space-x-5 flex items-center">
                        <i class="fas fa-briefcase text-4xl text-green-400"></i>
                        <span class="font-semibold space-y-2">
                            <p class="lg:text-5xl md:text-4xl text-4xl font-semibold counter">100</p>
                            <p class="text-xl font-semibold">ALL RESUMES</p>
                        </span>
                    </div>
                    <!-- ALL COMPANIES -->
                    <div class="w-full space-x-5 flex items-center">
                        <i class="fas fa-users text-4xl text-green-400"></i>
                        <span class="font-semibold space-y-2">
                            <p class="lg:text-5xl md:text-4xl text-4xl font-semibold counter">20</p>
                            <p class="text-xl font-semibold">ALL COMPANIES</p>
                        </span>
                    </div>

                    <div class="w-full space-x-5 flex items-center">
                        <span class="font-semibold space-y-2">
                            <p class="lg:text-5xl md:text-4xl text-4xl font-semibold counter">0</p>
                            <p class="text-xl font-semibold">ALL APPLICATIONS</p>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer -->
        <footer>
            <?php include 'Footer.php'; ?>
        </footer>

    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script> 

      $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.about-page').fadeIn(1000);
    })
    $(document).ready(function() {
        $('.counter').counterUp({
                delay: 10,
                time: 1200
            });
    })
  
</script>
</html>