<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Job-list</title>
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .list-page{
        display: none;
    }
</style>
<body>

    
        <?php include 'NavbarPage.php' ?>
        <div class="wrap list-page">
        <div class="w-full h-auto py-20 space-y-4 xl:px-32 lg:px-4 md:px-4 px-4" id="bg-img">
            <div class="w-full h-auto bg-white bg-opacity-20  py-6 px-5 lg:flex-row  md:flex-row flex-col lg:flex md:flex flex  lg:space-x-3 md:space-y-0 md:space-x-3 space-y-3 self-start ">
                    <input type="text" placeholder="KeyWord" class="bg-white w-full outline-none  border hover:border-blue-500 hover:border-4  px-2  py-2 rounded">

              <select id="alljobLocation" class="alljobLocation " name="alljobLocation" multiple>
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
              
                    <select id="alljobcategory" class="alljobcategory" name="alljobcategory" multiple>
                        <option value="Accounting">Accounting</option>
                        <option value="Tax">Tax</option>
                        <option value="Designer">Designer</option>
                        <option value="Chasier">Chasier</option>
                        <option value="HR">HR</option>
                        <option value="Wedsite Develope">Wedsite Develope</option>
                        <option value="IOS Deverloper">IOS Deverloper</option>
                    </select>
                    <button class="bg-green-400 w-full lg:mt-9 md:mt-9 mt-5 text-white py-2 hover:bg-opacity-80 rounded">Search</button>
            </div>
        </div>
        <div class="py-14 lg:px-10 md:px-8 px-3">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 lg:space-x-6 md:space-x-0 lg:space-y-0 md:space-y-8 space-y-8">
                <div class="w-full h-auto col-span-2">
                    <div class="flex justify-between items-center py-5 lg:flex-row md:flex-row flex-col lg:space-y-0 md:space-y-0 space-y-4">
                        <div class="space-x-4">
                            <span class="w-6 h-6 p-2 border rounded hover:border hover:border-green-400 rounded shadow" id="borderList" onclick="showJobList()">
                                <i class="fas fa-list-ol text-lg hover:text-green-400 cursor-pointer" id="list" title="Show Job List"></i>
                            </span>
                            <span class="w-6 h-6 p-2 pl-3 border hover:border hover:border-green-400 rounded shadow" id="borderGrid" onclick="showJobGrid()">
                                <i class="fa fa-th-large text-lg hover:text-green-400 cursor-pointer" id="grid" title="Show Job Grid"></i>
                            </span>
                            <button class="py-1 px-3 border space-x-3 hover:border hover:border-green-400 rounded shadow" onclick="document.getElementById('id03').style.display='block'">
                                <i class="fas fa-bell text-red-500"></i>
                                <span> Email Me Look Like Theses</span>
                            </button>
                        </div>
                        <div class="text-gray-600 py-1 px-3 border space-x-3 hover:border hover:border-green-400 rounded shadow">
                            Showing 1-3 of 3 jobs
                        </div>
                    </div>
                    <!-- Email Form -->
                    <div id="id03" class="modal_email  z-50">
                        <form class="bg-white lg:w-1/2 md:w-11/12 w-11/12 h-auto m-auto space-y-4 animate rounded" method="post">
                            <div class="bg-gray-100 w-full">
                                <div class="w-full flex justify-end px-4">
                                    <i onclick="document.getElementById('id03').style.display='none'" class="hover:text-red-400 close fas fa-times text-lg px-1 py-2 cursor-pointer" title="Close Modal"></i>
                                </div>
                                <p class="text-gray-600 text-center text-3xl font-semibold pb-3">
                                    New Job Alert
                                </p>
                            </div>
                            <div class="space-y-5 px-6 py-4">
                                <div class="space-y-1">
                                    <label>Email *</label><br>
                                    <input type="email" class="w-full py-3 px-2 border rounded" placeholder="Email your email" name="uname" required><br>
                                </div>
                                <div class="space-y-1">
                                    <label>Keywords</label><br>
                                    <input type="text" class="w-full py-3 px-2 border rounded" placeholder="Enter keywords to match jobs" name="uname" required><br>
                                </div>

                                <div class="space-y-1">
                                    <label>Email Frequency</label><br>
                                    <input type="email" class="w-full py-3 px-2 border rounded" placeholder="Email" name="uname" required><br>
                                </div>
                                <div class="w-full flex justify-center py-4 border-t">
                                    <button type="submit" class="bg-green-400 text-white text-center px-6 py-2 hover:bg-green-500 transition duration-200 rounded">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Show-Job-List -->
                    <div id="showJobList">
                        <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4">
                            <p>Senior Audit Associate</p>
                            <div class="w-full flex justify-between">
                                <div class="w-3/5 space-y-4">
                                    <p class="lg:space-x-3 md:space-x-3 space-x-0">
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
                                <div class="w-2/5 flex justify-end self-start">
                                    <div class="space-y-2">
                                        <a href="#" class="bg-blue-500 text-white font-semibold px-6 py-2 rounded">View more</a><br>
                                        <p>12 Months</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4">
                            <p>Senior Audit Associate</p>
                            <div class="w-full flex justify-between">
                                <div class="w-3/5 space-y-4">
                                    <p class="lg:space-x-3 md:space-x-3 space-x-0">
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
                                <div class="w-2/5 flex justify-end self-start">
                                    <div class="space-y-2">
                                        <a href="#" class="bg-blue-500 text-white font-semibold px-6 py-2 rounded">View more</a><br>
                                        <p>12 Months</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="w-full h-auto py-8 lg:px-6 md:px-2 px-2 hover:bg-gray-500 hover:text-white space-y-4">
                            <p>Senior Audit Associate</p>
                            <div class="w-full flex justify-between">
                                <div class="w-3/5 space-y-4">
                                    <p class="lg:space-x-3 md:space-x-3 space-x-0">
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
                                <div class="w-2/5 flex justify-end self-start">
                                    <div class="space-y-2">
                                        <a href="#" class="bg-blue-500 text-white font-semibold px-6 py-2 rounded">View more</a><br>
                                        <p>12 Months</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Job Girl -->
                    <div style="display:none" id="job_grid">

                        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4">
                            <div class="w-full h-auto border p-4 hover:bg-gray-600 hover:text-white">
                                <div class="w-full flex space-x-4">
                                    <div class="w-20 h-20 bg-gray-200 rounded-full flex justify-center items-center">
                                        <i class="fas fa-briefcase text-4xl text-gray-500"></i>
                                    </div>
                                    <div class="w-3/4 space-y-4">
                                        <p class="text-lg font-semibold">Senior Audit Associate</p>
                                        <p class="lg:space-x-3 md:space-x-3 space-x-0">

                                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                                    </div>
                                </div>
                                <p class="space-x-3 py-4">
                                    <span><i class="fas fa-envelope"></i> Send to friend</span>
                                    <span><i class="fas fa-share-alt"></i> Share</span>
                                </p>
                                <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                                <span>Phnom Penh</span>
                                <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                                </p>

                                <p class="text-right py-2">12 Months</p>
                            </div>
                            <div class="w-full h-auto border p-4 hover:bg-gray-600 hover:text-white">
                                <div class="w-full flex space-x-4">
                                    <div class="w-20 h-20 bg-gray-200 rounded-full flex justify-center items-center">
                                        <i class="fas fa-briefcase text-4xl text-gray-500"></i>
                                    </div>
                                    <div class="w-3/4 space-y-4">
                                        <p class="text-lg font-semibold">Senior Audit Associate</p>
                                        <p class="lg:space-x-3 md:space-x-3 space-x-0">

                                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                                    </div>
                                </div>
                                <p class="space-x-3 py-4">
                                    <span><i class="fas fa-envelope"></i> Send to friend</span>
                                    <span><i class="fas fa-share-alt"></i> Share</span>
                                </p>
                                <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                                <span>Phnom Penh</span>
                                <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                                </p>

                                <p class="text-right py-2">12 Months</p>
                            </div>
                            <div class="w-full h-auto border p-4 hover:bg-gray-600 hover:text-white">
                                <div class="w-full flex space-x-4">
                                    <div class="w-20 h-20 bg-gray-200 rounded-full flex justify-center items-center">
                                        <i class="fas fa-briefcase text-4xl text-gray-500"></i>
                                    </div>
                                    <div class="w-3/4 space-y-4">
                                        <p class="text-lg font-semibold">Senior Audit Associate</p>
                                        <p class="lg:space-x-3 md:space-x-3 space-x-0">

                                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                                    </div>
                                </div>
                                <p class="space-x-3 py-4">
                                    <span><i class="fas fa-envelope"></i> Send to friend</span>
                                    <span><i class="fas fa-share-alt"></i> Share</span>
                                </p>
                                <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                                <span>Phnom Penh</span>
                                <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                                </p>

                                <p class="text-right py-2">12 Months</p>
                            </div>
                            <div class="w-full h-auto border p-4 hover:bg-gray-600 hover:text-white">
                                <div class="w-full flex space-x-4">
                                    <div class="w-20 h-20 bg-gray-200 rounded-full flex justify-center items-center">
                                        <i class="fas fa-briefcase text-4xl text-gray-500"></i>
                                    </div>
                                    <div class="w-3/4 space-y-4">
                                        <p class="text-lg font-semibold">Senior Audit Associate</p>
                                        <p class="lg:space-x-3 md:space-x-3 space-x-0">

                                            <span class="uppercase">LOCHAN & CO (CAMBODIA) COMPANY LIMITED</span>
                                    </div>
                                </div>
                                <p class="space-x-3 py-4">
                                    <span><i class="fas fa-envelope"></i> Send to friend</span>
                                    <span><i class="fas fa-share-alt"></i> Share</span>
                                </p>
                                <span class="text-red-500"><i class="fas fa-bookmark hover:text-blue-500 cursor-pointer"></i> Full Time</span>
                                <span>Phnom Penh</span>
                                <span><i class="fas fa-calculator cursor-pointer"></i> December 12, 2021</span>
                                </p>

                                <p class="text-right py-2">12 Months</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 space-y-6">
                    <div class="space-y-6">
                        <h1 class="text-3xl font-semibold py-3">Job Category</h1>
                        <div class="bg-gray-200 w-full h-20 px-4 flex justify-between items-center  rounded shadow">

                            <a href="#" class="hover:text-blue-400">Auditing</a>
                            <span>(3)</span>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h1 class="text-3xl font-semibold py-3">Quick Link</h1>
                        <div class="bg-gray-200 w-full py-7 px-4 flex justify-between items-center  rounded shadow">
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

<script src="../assets/vender/js/jquery.multi-select.min.js"></script>
<script>
      $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.list-page').fadeIn(1000);
    })
</script>
</html>