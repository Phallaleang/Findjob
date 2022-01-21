
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company-Profile</title>
    <link rel="icon" href="../assets/img/logo.png">
    <link href="../assets/css/HomePage.css" rel="stylesheet">
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    #upload-photo {
        opacity: 0;
        position: absolute;
        z-index: -1;
    }
    .companyProfile-page{
        display: none;
    }
</style>

<body>
    <?php
    $path = $_SERVER['REQUEST_URI'];
    $path = explode('/', $path);
    $path = end($path);
    ?>
    <?php
     session_start();
     include_once '../view/ConnectDatabase/Class.php';
     $conn=new connection;
     $id= $_SESSION['id'];
      $sqlii="SELECT *FROM registerform where id='$id'";
       $result1=$conn->condb()->query($sqlii);
       $row  = mysqli_fetch_array($result1);
 
    ?>
    <input type="hidden" name="id" >
   
        <?php include 'NavbarPage.php' ?>
        <div class="wrap companyProfile-page">
        <div class="w-full h-auto py-24 space-y-4 xl:px-20 lg:px-4 md:px-4 px-4" id="bg-img">
            <div class="flex space-x-4 items-center">
                <div class="w-20 h-20 bg-gray-500 border rounded-full flex justify-center items-center">
                    <i class="fas fa-user text-6xl text-white"></i>

                </div>
                <h1 class="space-y-1">
                    <p class="text-white text-4xl font-semibold">
                        <?php echo $row['username'] ?>
                    </p>
                    <p class="text-white text-lg font-semibold">Company Profile</p>
                </h1>
            </div>
        </div>
        <!-- List Job Company sign out -->
        <div class="bg-gray-600 w-full h-18 px-8 relative">
            <ul class="flex py-6 space-x-4 text-lg font-semibold cursor-pointer">
                <li class="text-gray-400  space-x-1 hover:text-white">
                   
                    <a href="Jobs.php"> <i class="fas fa-book"></i> Jobs</a>
                </li>
                <li class="text-gray-400 space-x-1 hover:text-white relative">
                    
                    <a href="CompanyProfile.php" <?php if ($path == 'CompanyProfile.php') echo 'class="activeProfile"' ?>"><i class="far fa-user"></i> Company Profile</a>

                </li>
                <li class="text-gray-400 space-x-1 hover:text-white">
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="Logout.php">Sign Out</a>
                </li>
            </ul>
            <i class="fas fa-caret-up text-white text-5xl absolute top-12 left-40"></i>
        </div>
        <!--Box input  -->
        <div class="bg-white w-full h-auto px-8 py-14">
            <h1 class="text-2xl font-semibold py-2">Edit Company Info</h1>
            <div class="w-full h-auto grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 lg:space-y-4 md:space-y-4 space-y-2">
                <!-- Company Name -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Company Name
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <input type="text" class="w-full border px-4 py-3 rounded" placeholder="Enter your company name" value="<?php echo $row['displayname']?>" >
                </div>
                <!-- Company Description -->
                <div class="w-full col-span-1 sefl-start">
                    <label class="text-gray-800 font-semibold"> Company Description
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <div class="grid lg:grid-cols-1 md:grid-cols-1 py-1">
                        <div class="lg:space-x-2 md:space-x-2 space-x-0 lg:space-y-0 md:space-y-0 space-y-2 w-full">
                            <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="justifyLeft" title="Align Left">
                                <i class="fas fa-align-left"></i>

                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="justifyCenter" title="Align Center">
                                    <i class="fas fa-align-center" aria-hidden="true"></i>
                                </button>

                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="justifyFull" title="Align Full">
                                    <i class="fas fa-align-justify" aria-hidden="true"></i>
                                </button>

                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="justifyRight" title="Align Right">
                                    <i class="fas fa-align-right" aria-hidden="true"></i>
                                </button>

                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="bold" title="Text Bold">
                                    <i class="fas fa-bold" aria-hidden="true"></i>
                                </button>
                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="italic" title="Text Italic">
                                    <i class="fas fa-italic" aria-hidden="true"></i>
                                </button>

                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="underline" title="Underline">
                                    <i class="fas fa-underline" aria-hidden="true"></i>
                                </button>
                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="insertOrderedList" title="Ordererd List">
                                    <i class="fas fa-list-ol" aria-hidden="true"></i>
                                </button>
                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="insertUnorderedList" title="Unordered List">
                                    <i class="fas fa-list-ul" aria-hidden="true"></i>
                                </button>
                                <button class="px-2 py-1 border rounded shadow hover:bg-gray-100 buttonEditor" data-cmd="createLink" title="Create Link">
                                    <i class="fas fa-link" aria-hidden="true"></i>
                                </button>

                                </div>

                    </div>
                    <iframe class="w-full h-80 border border-gray-400 cursor-pointer" id="output" name="textField">

                   </iframe>


                </div>
                <!-- Input Logo -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Company Logo
                        <span class="text-red-600"></span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full relative flex space-x-4">
                    <button class="bg-gray-200 px-4 py-2 rounded shadow self-start">
                        <label for="upload-photo" class="cursor-pointer flex items-center space-x-1"><i class="fas fa-image text-4xl text-gray-400"></i> <span>Browser</span></label>
                        <input type="file" name="upload-photo" class="apearance" id="upload-photo" data-default-file="" />
                    </button><br>
                    <h1 id="Display-img" class="h-auto" value="1">
                
                    </h1>
                </div>
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Company Name
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <input type="text" class="w-full border px-4 py-3 rounded" placeholder="Enter your company name">
                </div>
                <!-- Category -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Category
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="w-full col-span-2 sefl-start relative">
                    <div class="bg-white  w-full h-11  flex justify-between items-center py-2 cursor-pointer border hover:border-blue-500 hover:border-4 px-2  py-2 rounded" id="jobCategoryList">
                        <p class="text-gray-600 font-semibold">Job Category</p>
                        <i class="fas fa-chevron-down icon_Category"></i>
                        <input type="hidden" class="num_category" value="1">
                    </div>
                    <div class="bg-white col-span-2 sefl-start w-full h-44 overflow-auto rounded-lg shadow-lg absolute px-4 py-2 space-y-4 z-30" id="boxCategory" style="display:none">
                        <p class="space-x-3">
                            <input type="checkbox" id="Accounting" class="jobProfile" value="Acconting">
                            <label for="Accounting" class="cursor-pointer hover:text-green-500"> Accounting</label>
                        </p>
                        <p class="space-x-3">
                            <input type="checkbox" id="Tax" class="jobProfile" value="Tax">
                            <label for="Tax" class="cursor-pointer hover:text-green-500">Tax</label>
                        </p>
                        <p class="space-x-3">
                            <input type="checkbox" id="Designer" class="jobProfile" value="Designer">
                            <label for="Designer" class="cursor-pointer hover:text-green-500"> Designer </label>
                        </p>
                        <p class="space-x-3">
                            <input type="checkbox" id="HR" class="jobProfile" value="HR">
                            <label for="HR" class="cursor-pointer hover:text-green-500">HR</label>
                        </p>
                        <p class="space-x-3">
                            <input type="checkbox" id="Chasier" class="jobProfile" value="Chasier">
                            <label for="Chasier" class="cursor-pointer hover:text-green-500">Chasier </label>
                        </p>
                        <p class="space-x-3">
                            <input type="checkbox" id="Wedsite_Development" class="jobProfile" value="Wedsite Developer">
                            <label for="Wedsite_Development" class="cursor-pointer hover:text-green-500">Wedsite Developer</label>
                        </p>

                        <p class="space-x-3">
                            <input type="checkbox" id="IOS_Deverloper" class="jobProfile" value="IOS Deverloper">
                            <label for="IOS_Deverloper" class="cursor-pointer hover:text-green-500">IOS Deverloper </label>
                        </p>
                    </div>
                </div>
                <!-- Location -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Location
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <select class="bg-white w-full border px-4 py-3 rounded">
                        <option value="Kondal">Kondal</option>
                        <option value="Phnom Penh">Phnom Penh</option>
                        <option value=" Banteay Meanchey"> Banteay Meanchey</option>
                        <option value=" Battambang"> Battambang</option>
                        <option value="Kampong Chhnang">Kampong Chhnang</option>
                        <option value="Kampong Cham">Kampong Cham</option>
                        <option value="Kampong Speu">Kampong Speu</option>
                        <option value="Kampong Thom">Kampong Thom</option>
                        <option value="Kampot">Kampot </option>
                        <option value=" Kep "> Kep </option>
                        <option value="Koh Kong">Koh Kong</option>
                        <option value="Kratie">Kratie </option>
                        <option value="Mondulkiri">Mondulkiri</option>
                        <option value="Oddor Meanchey">Oddor Meanchey</option>
                        <option value=" Pailin "> Pailin </option>
                        <option value="Preah Vihear">Preah Vihear</option>
                        <option value=" Prey Veng"> Prey Veng</option>
                        <option value="Pursat">Pursat</option>
                        <option value="Rattanakiri">Rattanakiri</option>
                        <option value="Siem Reap">Siem Reapl</option>
                        <option value="Sihanouk">Sihanouk</option>
                        <option value="Stung Treng ">Stung Treng </option>
                        <option value="Takeo">Takeo</option>
                        <option value="Tbong Khmum">Tbong Khmum</option>
                    </select>

                </div>
                <!-- Full Address -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Full Address</label>
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <input type="text" class="w-full border px-4 py-3 rounded" placeholder="Enter your address" required>
                </div>
                <!-- Wedsite input -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Wedsite
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <input type="url" class="w-full border px-4 py-3 rounded" placeholder="http://" >
                </div>
                <!-- Face Book -->
                <div class="w-full col-span-1 sefl-start pt-2">
                    <label class="text-gray-800 font-semibold">Facebook
                        <span class="text-red-600">*</span>
                    </label>
                </div>
                <div class="col-span-2 sefl-start w-full">
                    <input type="url" class="w-full border px-4 py-3 rounded" placeholder="http://" >
                </div>
                <div class="w-full col-span-1 sefl-start pt-2">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded shadow-lg">
                        Save
                    </button>
                </div>
            </div>
        </div>

        <?php include 'Footer.php'; ?>
    </div>
</body>
<script src="../assets//js/CompanyProfile.js"></script>
<script>
    $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.companyProfile-page').fadeIn(1000);
    })
</script>
</html>