<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Job-list</title>
    <link href="../assets/css/HomePage.css" rel="stylesheet">
    <?php include '../assets/vender/library.php' ?>
</head>
<style>
    .job-page{
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
    
        <?php include 'NavbarPage.php' ?>
        <div class="wrap job-page">
        <div class="w-full h-auto py-24 space-y-4 xl:px-20 lg:px-4 md:px-4 px-4" id="bg-img">
            <div class="flex space-x-4 items-center">
                <div class="w-20 h-20 bg-gray-500 border rounded-full flex justify-center items-center">
                    <i class="fas fa-user text-6xl text-white "></i>

                </div>
                <h1 class="space-y-1">
                    <p class="text-white text-4xl font-semibold">
                        <?php echo $row['username'] ?>
                    </p>
                    <p class="text-white text-lg font-semibold">Manage Jobs</p>
                </h1>
            </div>
        </div>
        <!-- List Job Company sign out -->
        <div class="bg-gray-600 w-full py-6 px-8 relative">
            <ul class="flex space-x-4 text-lg font-semibold cursor-pointer">
                <li class="text-gray-400  space-x-1 hover:text-white">

                    <a href="Jobs.php" <?php if ($path == 'Jobs.php') echo 'class="activeProfile"' ?>> <i class="fas fa-book"></i> Jobs</a>
                </li>
                <li class="text-gray-400 space-x-1 hover:text-white relative">

                    <a href="CompanyProfile.php"><i class="far fa-user"></i> Company Profile</a>
                </li>
                <li class="text-gray-400 space-x-1 hover:text-white">
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="Home.php">Sign Out</a>
                </li>
            </ul>
            <i class="fas fa-caret-up text-white text-5xl absolute top-12 left-14"></i>
        </div>
        <!--Box input  -->
        <div class="bg-white w-full h-auto px-8 py-14 space-y-4">
            <h1 class="text-2xl font-semibold py-2">No Jobs Found</h1>
            <p class="py-2 font-monospace">
                <strong>Note:</strong>
                Expired listings will be removed from public view.<br>
                You can set 100 jobs to be featured. Featured jobs cannot be reverted. You have 100 times to refresh for all the job.
            </p>
            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 py-2 lg:space-y-0 md:space-y-0 space-y-3">
                <div class="flex space-x-2 items-center">
                    <b>Action</b>
                    <select class="bg-white px-2 py-2 border border-gray-500 rounded">
                        <option value="Select--">
                            Select--
                        </option>
                        <option value="Public">
                            Public
                        </option>

                        <option value="Unpublish">
                            Unpublish
                        </option>
                        <option value="Delete">
                            Delete
                        </option>

                    </select>
                    <button class="bg-green-500 text-white font-semibold text-lg px-5 py-2 hover:bg-green-600 rounded shadow">Go</button>
                </div>
                <div class="flex items-center lg:justify-end md:justify-end justify-start space-x-1">
                    <b>Filter: </b>
                    <select class="bg-white w-52 px-4 py-2 border border-gray-500 rounded">
                        <option value="AllStatus">
                            All Status
                        </option>
                        <option value="Active">
                            Active
                        </option>

                        <option value="Unpublish">
                            Inactive
                        </option>
                        <option value=" Pendding Approval">
                            Pendding Approval
                        </option>
                        <option value="Expired">
                            Expired
                        </option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col py-4">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="py-3 px-6  tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Job Title
                                        </th>
                                        <th scope="col" class="py-3 px-6  tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Views
                                        </th>
                                        <th scope="col" class="py-3 px-6  tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Featured?
                                        </th>
                                        <th scope="col" class="py-3 px-6 tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Location
                                        </th>
                                        <th scope="col" class="py-3 px-6 tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Closing Date
                                        </th>
                                        <th scope="col" class="py-3 px-6 tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            App
                                        </th>
                                        <th scope="col" class="py-3 px-6 tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Status
                                        </th>
                                        <th scope="col" colspan="2" class="relative py-3 px-6">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Product 1 -->
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-600 hover:bg-gray-100">
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Sliver
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Laptop
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            $2999
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            $2999
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            $2999
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            $2999
                                        </td>
                                        <td class="text-center">
                                            <a href="#"><i class="fa fa-edit" style="color:greenyellow;"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#"><i class="fa fa-trash" style="color:red;"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
            <button class="bg-green-500 hover:bg-green-600 px-6 py-2 text-white font-semibold rounded shadow">
                Post a Job
            </button>
        </div>


        <?php include 'Footer.php'; ?>
    </div>
</body>
<script>
    $(window).on('load', function() {
        $('.loading').fadeOut(1000);
        $('.job-page').fadeIn(1000);
    })
</script>
</html>