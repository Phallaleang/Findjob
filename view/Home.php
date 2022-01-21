<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/vender/css/demo-styles.css">
    <link rel="stylesheet" href="../assets/vender/css/example-styles.css">
    <link href="../assets/css/HomePage.css" rel="stylesheet">
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .home-page {
        display: none;
    }
</style>
<body>

    
        <?php include 'NavbarPage.php' ?>
        <div class="wrap home-page">
        <div class="w-full h-auto py-16 space-y-4 xl:px-32 lg:px-4 md:px-4 px-4" id="bg-img">
            <h1 class="text-center text-white  xl:text-5xl lg:tex-5xl md:text-4xl text-3xl font-semibold">Explore your dream career</h1>
            <div class=" flex  items-center">
                <div class="w-full h-auto bg-white bg-opacity-20  py-6 px-5 lg:flex-row  md:flex-row flex-col lg:flex md:flex flex  lg:space-x-3 md:space-y-0 md:space-x-3 space-y-3 self-start">

                    <input type="text" placeholder="KeyWord" class="bg-white w-full outline-none  border hover:border-blue-500 hover:border-4 px-2  py-2 rounded self-start">

                    <select id="JobLocation" class="JobLocation" name="JobLocation" multiple>

                        <option value="Banteay Meanchey">Banteay Meanchey</option>
                        <option value="Battambang">Battambang</option>
                        <option value="Kampong Cham">Kampong Cham</option>
                        <option value="Kampong Chhnang">Kampong Chhnang</option>
                        <option value="Kampong Speu">Kampong Speu</option>
                        <option value="Kampong Thom">Kampong Thom</option>
                        <option value="Kampot">Kampot</option>
                        <option value="Kondal">Kondal</option>
                        <option value=" Kep"> Kep</option>
                        <option value="Koh Kong">Koh Kong</option>
                        <option value="Kratie">Kratie</option>
                        <option value="Mondulkiri">Mondulkiri</option>
                        <option value="Oddor Meanchey">Oddor Meanchey</option>
                        <option value="Pailin">Pailin</option>
                        <option value="Phnom Penh">Phnom Penh</option>
                        <option value="Preah Vihear">Preah Vihear</option>
                        <option value="Prey Veng">Prey Veng</option>
                        <option value="Pursat">Pursat</option>
                        <option value="Rattanakiri">Rattanakiri</option>
                        <option value="Siem Reap">Siem Reap</option>
                        <option value="Sihanouk">Sihanouk</option>
                        <option value="Stung Treng">Stung Treng</option>
                        <option value="Takeo">Takeo</option>
                        <option value="Tbong Khmum">Tbong Khmum</option>

                    </select>


                    <!-- Job Category -->
                    <select id="JobCategory" name="JobCategory" multiple>

                        <option value="Accounting">Accounting</option>
                        <option value="Tax">Tax</option>
                        <option value="Designer">Designer</option>
                        <option value="Chasier">Chasier</option>
                        <option value="HR">HR</option>
                        <option value="Wedsite Develope">Wedsite Develope</option>
                        <option value="IOS Deverloper">IOS Deverloper</option>

                    </select>
                    <button class="bg-green-400  w-full  text-white py-2 hover:bg-opacity-80 rounded self-start">Search</button>
                </div>
            </div>
        </div>
        <div class="py-14 lg:px-10 md:px-8 px-3">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 lg:space-x-6 md:space-x-0 lg:space-y-0 md:space-y-8 space-y-8">
                <div class="w-full h-auto col-span-2">
                    <h1 class="text-gray-600 text-3xl font-semibold py-3 border-b border-gray-700 ">Lastes Jobs</h1>
                    <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4 border-gray-300 border-b">
                        <p>Senior Audit Associate</p>
                        <p class="space-x-3">
                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                            <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                            <span>Phnom Penh</span>
                            <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                        </p>
                        <p class="space-x-3">
                            <span><i class="fas fa-envelope"></i> Send to friend</span>
                            <span><i class="fas fa-share-alt"></i> Share</span>
                        </p>
                    </div>
                    <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500  hover:text-white space-y-4 border-gray-300 border-b">
                        <p>Senior Audit Associate</p>
                        <p class="space-x-3">
                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                            <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                            <span>Phnom Penh</span>
                            <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                        </p>
                        <p class="space-x-3">
                            <span><i class="fas fa-envelope"></i> Send to friend</span>
                            <span><i class="fas fa-share-alt"></i> Share</span>
                        </p>
                    </div>
                    <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4 border-gray-300 border-b">
                        <p>Senior Audit Associate</p>
                        <p class="space-x-3">
                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                            <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                            <span>Phnom Penh</span>
                            <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                        </p>
                        <p class="space-x-3">
                            <span><i class="fas fa-envelope"></i> Send to friend</span>
                            <span><i class="fas fa-share-alt"></i> Share</span>
                        </p>
                    </div>
                    <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4 border-gray-300 border-b">
                        <p>Senior Audit Associate</p>
                        <p class="space-x-3">
                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                            <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                            <span>Phnom Penh</span>
                            <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                        </p>
                        <p class="space-x-3">
                            <span><i class="fas fa-envelope"></i> Send to friend</span>
                            <span><i class="fas fa-share-alt"></i> Share</span>
                        </p>
                    </div>
                    <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4 ">
                        <p>Senior Audit Associate</p>
                        <p class="space-x-3">
                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                            <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                            <span>Phnom Penh</span>
                            <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                        </p>
                        <p class="space-x-3">
                            <span><i class="fas fa-envelope"></i> Send to friend</span>
                            <span><i class="fas fa-share-alt"></i> Share</span>
                        </p>
                    </div>
                </div>
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
<script src="../assets/vender/js/jquery-2.2.4.min.js"></script>
<script src="../assets/vender/js/jquery.multi-select.min.js"></script>
<script src="../assets/js/Home.js"></script>
<script>
    $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.home-page').fadeIn(1000);
    })
</script>
</html>