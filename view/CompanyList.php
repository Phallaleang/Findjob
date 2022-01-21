<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Company-list</title>
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .company-page{
        display: none;
    }
</style>
<body>
    
        <?php include 'NavbarPage.php' ?>
        <div class="wrap company-page">
        <div class="w-full h-auto py-16 space-y-4 xl:px-32 lg:px-4 md:px-4 px-4" id="bg-img">
            <h1 class="py-14 text-white text-4xl font-bold">
                Company List
            </h1>
        </div>
        <div class="py-14 lg:px-10 md:px-8 px-3">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 lg:space-x-6 md:space-x-0 lg:space-y-0 md:space-y-8 space-y-8">
                <div class="w-full h-auto col-span-2">
                    <h1 class="text-3xl font-semibold py-4">Company List</h1>
                    <button class="bg-green-400 text-white font-semibold px-6 py-2 rounded"> All </button>
                    <div class="w-full h-auto grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 py-2 gap-4">
                        <!-- Job-1 -->
                        <div class="w-full z-0 h-auto border cursor-pointer relative box-job block">
                            <!-- hover overlay -->
                            <div class="bg-opacity-90 z-0 flex justify-center items-center overlay ">
                                <button class="bg-blue-500 px-6 py-2 text-white rounded  left-14">
                                    View more
                                </button>
                            </div>
                            <div class="w-full h-44 flex justify-center items-center py-4 z-0">
                                <div class="w-36 h-36 bg-gray-200 rounded-full flex justify-center items-center">
                                    <i class="fas fa-briefcase text-6xl text-gray-500"></i>
                                </div>
                            </div>

                            <ul class="w-full border-t-2 py-4 px-2 space-y-1">
                                <li class="text-lg text-gray-800 font-semibold">Admin</li>
                                <li class="space-x-2">
                                    <i class="fas fa-briefcase text-blue-500"></i>
                                    <span class="font-semibold">1 job</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Jobs-2 -->
                        <div class="w-full h-auto border cursor-pointer relative box-job block">
                            <!-- hover overlay -->
                            <div class="bg-opacity-90  flex justify-center items-center overlay ">
                                <button class="bg-blue-500 px-6 py-2 text-white rounded  left-14">
                                    View more
                                </button>
                            </div>
                            <div class="w-full h-44 flex justify-center items-center py-4">
                                <div class="w-36 h-36 bg-gray-200 rounded-full flex justify-center items-center">
                                    <i class="fas fa-briefcase text-6xl text-gray-500"></i>
                                </div>
                            </div>

                            <ul class="w-full border-t-2 py-4 px-2 space-y-1">
                                <li class="text-lg text-gray-800 font-semibold">Admin</li>
                                <li class="space-x-2">
                                    <i class="fas fa-briefcase text-blue-500"></i>
                                    <span class="font-semibold">1 job</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Job-3 -->
                        <div class="w-full h-auto border cursor-pointer relative box-job block">
                            <!-- hover overlay -->
                            <div class="bg-opacity-90  flex justify-center items-center overlay ">
                                <button class="bg-blue-500 px-6 py-2 text-white rounded  left-14">
                                    View more
                                </button>
                            </div>
                            <div class="w-full h-44 flex justify-center items-center py-4">
                                <div class="w-36 h-36 bg-gray-200 rounded-full flex justify-center items-center">
                                    <i class="fas fa-briefcase text-6xl text-gray-500"></i>
                                </div>
                            </div>

                            <ul class="w-full border-t-2 py-4 px-2 space-y-1">
                                <li class="text-lg text-gray-800 font-semibold">Admin</li>
                                <li class="space-x-2">
                                    <i class="fas fa-briefcase text-blue-500"></i>
                                    <span class="font-semibold">1 job</span>
                                </li>
                            </ul>

                        </div>
                        <!-- Jobs-4 -->
                        <div class="w-full h-auto border cursor-pointer relative box-job block">
                            <!-- hover overlay -->
                            <div class="bg-opacity-90  flex justify-center items-center overlay ">
                                <button class="bg-blue-500 px-6 py-2 text-white rounded  left-14">
                                    View more
                                </button>
                            </div>
                            <div class="w-full h-44 flex justify-center items-center py-4">
                                <div class="w-36 h-36 bg-gray-200 rounded-full flex justify-center items-center">
                                    <i class="fas fa-briefcase text-6xl text-gray-500"></i>
                                </div>
                            </div>

                            <ul class="w-full border-t-2 py-4 px-2 space-y-1">
                                <li class="text-lg text-gray-800 font-semibold">Admin</li>
                                <li class="space-x-2">
                                    <i class="fas fa-briefcase text-blue-500"></i>
                                    <span class="font-semibold">1 job</span>
                                </li>
                            </ul>

                        </div>
                        <!-- Job-5 -->
                        <div class="w-full h-auto border cursor-pointer relative box-job block">
                            <!-- hover overlay -->
                            <div class="bg-opacity-90  flex justify-center items-center overlay ">
                                <button class="bg-blue-500 px-6 py-2 text-white rounded  left-14">
                                    View more
                                </button>
                            </div>
                            <div class="w-full h-44 flex justify-center items-center py-4">
                                <div class="w-36 h-36 bg-gray-200 rounded-full flex justify-center items-center">
                                    <i class="fas fa-briefcase text-6xl text-gray-500"></i>
                                </div>
                            </div>

                            <ul class="w-full border-t-2 py-4 px-2 space-y-1">
                                <li class="text-lg text-gray-800 font-semibold">Admin</li>
                                <li class="space-x-2">
                                    <i class="fas fa-briefcase text-blue-500"></i>
                                    <span class="font-semibold">1 job</span>
                                </li>
                            </ul>

                        </div>
                        <!-- Job-6 -->
                        <div class="w-full h-auto border cursor-pointer relative box-job block">
                            <!-- hover overlay -->
                            <div class="bg-opacity-90  flex justify-center items-center overlay ">
                                <button class="bg-blue-500 px-6 py-2 text-white rounded  left-14">
                                    View more
                                </button>
                            </div>
                            <div class="w-full h-44 flex justify-center items-center py-4">
                                <div class="w-36 h-36 bg-gray-200 rounded-full flex justify-center items-center">
                                    <i class="fas fa-briefcase text-6xl text-gray-500"></i>
                                </div>
                            </div>

                            <ul class="w-full border-t-2 py-4 px-2 space-y-1">
                                <li class="text-lg text-gray-800 font-semibold">Admin</li>
                                <li class="space-x-2">
                                    <i class="fas fa-briefcase text-blue-500"></i>
                                    <span class="font-semibold">1 job</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!--Job Category  -->
                <div class="col-span-1 space-y-6">
                    <div class="space-y-6">
                        <h1 class="text-3xl font-semibold py-3">Job Category</h1>
                        <div class="bg-gray-200 w-full h-20 px-4 flex justify-between items-center rounded shadow">

                            <a href="#" class="hover:text-blue-400">Auditing</a>
                            <span>(3)</span>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h1 class="text-3xl font-semibold py-3">Quick Link</h1>
                        <div class="bg-gray-200 w-full py-7 px-4 flex justify-between items-center rounded shadow">
                            <ul class="w-full">
                                <li class="text-blue-400 py-2 border-b border-gray-400 flex justify-between items-center">
                                    <a href="#">Contact (0)</a>
                                    <i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i>
                                </li>
                                <li class="text-red-300 py-2 border-b border-gray-400 flex justify-between items-center">
                                    <a href="#">Freelance (0)</a>
                                    <i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i>
                                </li>
                                <li class="text-yellow-500 py-2 border-b border-gray-400 flex justify-between items-center">
                                    <a href="#">Full Time (3)</a>
                                    <i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i>
                                </li>
                                <li class="text-pink-500 py-2 border-b border-gray-400 flex justify-between items-center">
                                    <a href="#">Intership (0)</a>
                                    <i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i>
                                </li>
                                <li class="text-indigo-400 py-2 border-b border-gray-400 flex justify-between items-center">
                                    <a href="#">Path Time (0)</a>
                                    <i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="space-y-6">
                        <h1 class="text-3xl font-semibold py-3">Job Location</h1>
                        <div class="bg-gray-200 w-full h-20 px-4 flex justify-between items-center rounded shadow">

                            <a href="#" class="hover:text-blue-400">Phnom Penh</a>
                            <span>(3)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include 'Footer.php'; ?>
    </div>
</body>
<script>
      $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.company-page').fadeIn(1000);
    })
</script>
</html>