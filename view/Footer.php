<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/HomePage.css" rel="stylesheet">
    <?php include '../assets/vender/library.php' ?>
</head>

<body>
    <div class="w-full h-auto">
        <div class="bg-gray-200 w-full h-auto grid px-8 lg:py-12 md:py-10 py-8 lg:grid-cols-3 md:grid-cols-3 grid-cols-1 border-b-2 border-gray-700 lg:space-y-0 md:space-y-0 space-y-9">
            <div class="w-full h-auto px-4 space-y-4">
                <h1 class="text-lg font-semibold uppercase cursor-pointer">About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi sed corporis dolor illum architecto explicabo et cumque at ipsa totam molestiae? Blanditiis minima quasi, sit libero recusandae illo iure.
                    architecto explicabo et cumque at ipsa totam molestiae? Blanditiis minima quasi, sit libero recusandae illo iure.
                </p>
            </div>
            <div class="w-full h-auto  px-4 space-y-4">
                <h1 class="text-lg font-semibold uppercase cursor-pointer">USEFUL LINKS</h1>
                <ul class="uppercase space-y-2">
                    <li class="hover:text-red-400 ">
                        <a href="Home.php" >Home</a>
                    </li>
                    <li class="hover:text-red-400 ">
                        <a href="JobList.php">job list</a>
                    </li>
                    <li class="hover:text-red-400 hover:text-xl">
                        <a href="CompanyList.php">company list</a>
                    </li>
                    <li class="hover:text-red-400 hover:text-xl">
                        <a href="About.php" >about us</a>
                    </li>
                    <li class="hover:text-red-400 hover:text-xl">
                        <a href="Contact.php">contact us</a>
                    </li>
                </ul>

            </div>
            <div class=" w-full h-auto px-4 space-y-4">
                <h1 class="text-lg font-semibold uppercase cursor-pointer">contact us</h1>
                <ul>
                    <li>Our Office</li>
                    <li>8th Floor, VTRUST Tower, St 169, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh, Cambodia.</li>
                    <li>Tel:(+855) 16 41 22 91</li>
                    <li>Email: CambodiaDigital@1234.com</li>

                </ul>
                <ul class="flex space-x-6">
                    <li class="bg-gray-600 w-10 h-10 py-2 px-3 rounded-full shadow-md cursor-pointer">
                        <a href="#" title="Facebook">
                            <i class="fab fa-facebook-f text-gray-200 text-2xl hover:text-green-400"></i>
                        </a>
                    </li>
                    <li class="bg-gray-600 w-10 h-10 py-2 px-2 rounded-full shadow-md cursor-pointer">
                        <a href="#" title="Twitter">
                            <i class="fab fa-twitter text-gray-200 text-2xl hover:text-green-400"></i>
                        </a>
                    </li>
                    <li class="bg-gray-600 w-10 h-10 py-2 px-2 rounded-full shadow-md cursor-pointer">
                        <a href="#" title="Google">
                            <i class="fab fa-google-plus-g text-gray-200 text-2xl hover:text-green-400"></i>
                        </a>
                    </li>
                    <li class="bg-gray-600 w-10 h-10 py-2 px-2.5 rounded-full shadow-md cursor-pointer">
                        <a href="#" title="Linkedin">
                            <i class="fab fa-linkedin-in text-gray-200 text-2xl hover:text-green-400"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <p class="text-center py-7">
            &copy; <strong>2021 By digital service Cambodia</strong>
        </p>
    </div>
</body>

</html>