<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/HomePage.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/package/dist/sweetalert2.css">
    <link rel="stylesheet" href="../assets/package/dist/sweetalert2.min.css">
    <?php include '../assets/vender/library.php' ?>
    <title>Cambodian digital</title>
</head>
<style>
/* Page Loading */

.loading {
    width: 100%;
    height: 100vh;
    overflow: hidden;
    position: absolute;
    
    
}

.loading .demo{
    width: 100px;
    height: 100px;
    border: 10px solid white;
    border-top: 10px solid #3498db;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    color: red;
    border-radius: 50%;
    z-index: 1;
    animation: animate 1.5s infinite linear;
  
}
  @keyframes animate {
        100%{
            transform: rotate(360deg);
        }
    }
</style>


<body>
    <!-- Php active Navbar -->
    <?php
    $path = $_SERVER['REQUEST_URI'];
    $path = explode('/', $path);
    $path = end($path);

    ?>
    <!--Loading  -->
    <div class="loading ">
        <div class="demo animate-pulse">
        </div>
    </div>
    <div class="w-full z-40 lg:block md:hidden hidden" id="nav">
        <nav class="bg-white w-full flex justify-between items-center px-8 border-b border-gray-200">
            <!-- Logo -->
            <img src="../assets/img/logo.png" class="w-24 h-18 cursor-pointer" onclick="modalLogo()">
            <ul class="flex py-7 space-x-8 uppercase font-bold cursor-pointer relative">
                <li class="home hover:text-green-400">
                    <a href="Home.php" <?php if ($_SERVER['REQUEST_URI'] == "findjob/view/" || $path == 'Home.php') echo "class='active'"; ?>>
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class=" hover:text-green-400">
                    <a href="JobList.php" <?php if ($path == 'JobList.php') echo "class='active'" ?>>job list</a>
                </li>
                <li class=" hover:text-green-400">
                    <a href="CompanyList.php" <?php if ($path == 'CompanyList.php') echo "class='active'" ?>>company list</a>
                </li>
                <li class="relative main-menu ">
                    <input type="hidden" id="hiden" value="1">
                    <a class="space-x-3  hover:text-green-400" title="Click">
                        <span>more</span> <i class="fas fa-chevron-down icon-chevron"></i> </a>
                    <ul id="sub-menu" class="modal_dropdown bg-white w-52  h-auto px-4 py-4 absolute top-12 -left-5 space-y-3 border-t-2 border-green-400 rounded-lg shadow-lg">
                        <i class="fas fa-caret-up text-lg text-green-400 absolute -top-3"></i>

                        <li class="hover:text-green-400">
                            <a href="Contact.php" <?php if ($path == 'Contact.php') echo "class='active'" ?>>Contact us</a>
                        </li>
                        <li class=" hover:text-green-400 pb-2">
                            <a href="About.php" <?php if ($path == 'About.php') echo "class='active'" ?>>About us</a>
                        </li>

                    </ul>
                </li>
                <li class="border-r-2 border-gray-400 h-7"></li>
                <li class="flex hover:text-red-600 transition duration-500 space-x-2" id="login" onclick="document.getElementById('id01').style.display='block'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="hover:text-red-600 transition duration-500">Login
                    </span>
                </li>

                <li class="bg-gray-500 -mt-2 w-10 h-10 rounded-full border border-gray-500 " id="profile" style="display:none;">

                    <a href="Jobs.php">
                        <i class="fas fa-user text-4xl text-white pl-1 pt-1"></i>
                    </a>
                </li>
            </ul>

        </nav>
    </div>
    <!-- Click Logo Modal  -->
    <div id="id06" class="modal_logo z-50 animate" style="display:none;" onclick="document.getElementById('id06').style.display='none'">
        <div class="w-full">
            <div class="w-full flex justify-end px-4">
                <i onclick="document.getElementById('id06').style.display='none'" class="hover:text-red-400 close fas fa-times text-xl text-white px-1 py-2 cursor-pointer" title="Close Modal"></i>
            </div>
            <div class="flex justify-center">
                <img src="../assets/img/02.jpg" class="w-1/2 h-1/2">
            </div>

        </div>

    </div>
    <!-- Nav bar Responsive -->
    <div class="lg:hidden md:block block ">
        <div class="w-full bg-white flex justify-between px-6 border-b">
            <img src="../assets/img/logo.png" class="w-24 h-18" onclick="modalLogo()">

            <!-- Icon user and Navbar -->
            <div class="flex space-x-6 py-3 nav-bar items-center">
                <i class="fas fa-user text-2xl cursor-pointer hover:text-blue-500 icon-user-2 border px-2 py-1 rounded shadow"></i>
                <i class="fas fa-bars text-gray-500 text-2xl cursor-pointer hover:text-blue-500  border px-2 py-1 rounded shadow icon-user-1"></i>
            </div>
        </div>
        <!--Menu  -->
        <div class="bg-white w-full h-auto py-4 navbar-box-1" style="display:none">
            <input type="hidden" id="number-1" value="1">
            <ul class="w-ful space-y-6 px-7 py-4 uppercase font-semibold cursor-pointer">
                <li class="home  hover:text-green-400">
                    <a href="Home.php" <?php if ($path == 'Home.php') echo "class='active'" ?>>
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class=" hover:text-green-400">
                    <a href="JobList.php" <?php if ($path == 'JobList.php') echo "class='active'" ?>>job list</a>
                </li>
                <li class=" hover:text-green-400">
                    <a href="CompanyList.php" <?php if ($path == 'CompanyList.php') echo "class='active'" ?>>company list</a>
                </li>
                <li class="relative menuToggle">
                    <input type="hidden" id="id-chevron-down" value="1">
                    <a class="space-x-8 hover:text-green-400">
                        <span>more</span>
                        <i class="fas fa-chevron-down icon-chevron-down"></i></a>
                    <ul class="pt-5 px-6 space-y-6 subToggle hidden">
                        <li class="hover:text-green-400">
                            <a href="Contact.php" <?php if ($path == 'Contact.php') echo "class='active'" ?>>Contact us</a>
                        </li>
                        <li class="hover:text-green-400">
                            <a href="About.php" <?php if ($path == 'About.php') echo "class='active'" ?>>About us</a>
                        </li>

                    </ul>

                </li>
            </ul>
        </div>
        <!-- User -->
        <div class="bg-white w-full h-auto  py-4 navbar-box-2" style="display:none">
            <input type="hidden" id="number-2" value="1">
            <ul class="w-ful space-y-2 px-7 uppercase font-semibold cursor-pointer">
                <li class="flex hover:text-red-600 transition duration-500 space-x-2 py-3" onclick="document.getElementById('id01').style.display='block'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Login</span>
                </li>
                <li class="border-gray-500 space-x-2 py-2 hover:text-green-400" onclick="document.getElementById('id02').style.display='block'">
                    <i class="fas fa-key"></i>
                    <span>Register</span>
                </li>
            </ul>
        </div>


    </div>

    <!-- Form login -->
    <div id="id01" class="modal  z-50">

        <form class="bg-white lg:w-1/3 md:w-11/12 w-11/12 h-auto m-auto space-y-4  animate rounded" method="post" action="../view/ConnectDatabase/Login.php">
            <div class="bg-gray-100 w-full">
                <div class="w-full flex justify-end px-4">
                    <i onclick="document.getElementById('id01').style.display='none'" class="hover:text-red-400 close fas fa-times text-xl px-1 py-2 cursor-pointer" title="Close Modal"></i>
                </div>
                <p class="text-gray-600 text-center text-2xl font-semibold py-2">
                    Login
                </p>
            </div>
            <div class="space-y-5 px-6 py-4">
                <input type="text" class="w-full py-3 px-2 border rounded" placeholder="Enter Username" id="userName" name="uname"><br>
                <div class="w-full text-lg space-y-2">
                    <input type="password" class="w-full py-3 px-2 border rounded" placeholder="Enter Password" id="Password" name="psw"><br>
                    <input type="checkbox" class="w-10 h-5 cursor-pointer" id="remember" name="remember" onclick="showPasswordLogin()">
                    <label for="remember" class="text-black cursor-pointer">Show</label>
                </div>
                <button type="button" class="w-full bg-green-400 text-white text-center py-2 hover:bg-green-500 transition duration-200 rounded" onclick="Login()">Login</button>
                <br>
            </div>
            <div class="w-full flex justify-between items-center py-3 px-4" style="background-color:#f1f1f1">
                <div class="border-gray-500 space-x-2  hover:text-green-400" onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'">
                    <span class="hover:underline text-lg text-gray-700 hover:text-blue-600 cursor-pointer">Create Account</span>
                </div>
                <div class="flex space-x-1">
                    <p class="text-gray-700">Forgot </p>
                    <button type="button" class="text-blue-600 underline" onclick="forgetPassword()">password?</button>
                </div>

            </div>
        </form>
    </div>
    <!-- Forget Passowrd login -->
    <div id="id05" class="modal_forget z-50" style="display:none;">

        <form class="bg-white lg:w-2/5 md:w-11/12 w-11/12 h-auto m-auto space-y-4  animate rounded" method="post" action="../view/ConnectDatabase/ForgetPassword.php">
            <div class="bg-gray-100 w-full">
                <div class="w-full flex justify-end px-4">
                    <i onclick="document.getElementById('id05').style.display='none'" class="hover:text-red-400 close fas fa-times text-xl px-1 py-2 cursor-pointer" title="Close Modal"></i>
                </div>
                <p class="text-gray-600 text-center text-2xl font-semibold">
                    Send
                </p>
            </div>
            <div class="space-y-5 px-6 py-4">
                <input type="hidden" id="idEmail" name="emailId">
                <input type="email" class="w-full py-3 px-2 border rounded" placeholder="Enter Email" id="forgetPassword" name="passwordForget"><br>
                <button type="button" class="w-full bg-green-400 text-white text-center py-2 hover:bg-green-500 transition duration-200 rounded" onclick="LoginForget()">Send</button>

            </div>
        </form>
    </div>
    <!-- Register Form -->
    <div id="id02" class="modal_resgiter  z-50">
        <form class="bg-white lg:w-1/3 md:w-11/12 w-11/12 h-auto m-auto space-y-4  animate rounded" method="post" action="../view/ConnectDatabase/Register.php">
            <div class="bg-gray-100 w-full">
                <div class="w-full flex justify-end px-4">
                    <i onclick="document.getElementById('id02').style.display='none'" class="hover:text-red-400 close fas fa-times text-lg px-1 py-2 cursor-pointer" title="Close Modal"></i>
                </div>
                <p class="text-gray-600 text-center text-3xl font-semibold pb-3">
                    Sign up
                </p>
            </div>
            <div class="space-y-5 px-6 py-4">
                <input type="hidden" id="idUser" name="UserId">

                <input type="text" class="w-full  py-3 px-2 border rounded" placeholder="Display name" name="displayName" id="nameDisplay"><br>
                <input type="text" class="w-full py-3 px-2 border rounded" placeholder="Username" name="userName" id="nameUser"><br>
                <input type="email" class="w-full py-3 px-2 border rounded" placeholder="email@example.com" name="emailName" id="nameEmail"><br>
                <input type="password" class="w-full py-3 px-2 border rounded" placeholder="Password" name="passwordName" id="namePassword">
                <input type="checkbox" id="show" onclick="showPassword()"> <label for="show" class="cursor-pointer hover:text-red-500">Show</label>
                <br>
                <input type="password" class="w-full py-3 px-2 border rounded" placeholder="Re-Password" name="rePasswordName" id="nameRePassword"><br>
            </div>
            <div class="w-full flex justify-center items-center text-center text-lg  py-3">
                <input type="checkbox" class="w-10 h-5 cursor-pointer" id="agree" name="remember">
                <label for="agree" class="text-gray-700 cursor-pointer"> I agree with the <a href="SamplePage.php" class="text-blue-600 hover:underline" target="_blank" title="sample page">Terms of use</a></label>
            </div>
            <div class="w-full flex justify-center">
                <button type="submit" class="bg-green-400 text-white text-center px-6 py-2 hover:bg-green-500 transition duration-200 rounded signup">Sign Up</button>
            </div>
            <p class="px-4">Already have an account? <a href="#" class="text-blue-600 hover:underline" onclick="backtologin()">Login Now <i class="fas fa-arrow-right text-sm"></i> </a></p>
    </div>
    </form>
    </div>

    <!-- Button Scroll to Top Bottom -->
    <button class="bg-gray-400 z-50 bg-opacity-70 px-4 py-3 rounded-full  fixed right-4 bottom-8 hidden transition ease-in duration-300 hover:bg-gray-700 " id="scrollTops" title="Go to top" onclick="buttonScrollTop()">
        <label for="scrollTops" class="fas fa-chevron-up text-2xl text-white hover:text-green-400 cursor-pointer"></label>
    </button>
</body>
<script src="../assets/js/Homepage.js "></script>
<script src="../assets/package/dist/sweetalert2.all.js">
</script>
<script src="../assets/package/dist/sweetalert2.js"></script>
<script>
    // Form Register

    $(document).ready(function() {
        $('.signup').on('click', function(e) {
            e.preventDefault();

            var idUser = $('#idUser').val();
            var nameDisplay = $('#nameDisplay').val();
            var nameUser = $('#nameUser').val();
            var nameEmail = $('#nameEmail').val();
            var namePassword = $('#namePassword').val();
            var nameRePassword = $('#nameRePassword').val();
            var validation = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;




            if (nameDisplay == null || nameDisplay == '') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Display name is required',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (nameUser == null || nameUser == '') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'User name is required',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (nameEmail == null || nameEmail == '') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Email is required',
                    showConfirmButton: false,
                    timer: 1500
                })

            } else if (!validation.test(nameEmail)) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Invalid email format',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (namePassword == '' || namePassword == null) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Password is required',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (namePassword.length < 3 || namePassword.length > 8) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Password is less 3 then 8 characters',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (nameRePassword == null || nameRePassword == '') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Re-password is required',
                    showConfirmButton: false,
                    timer: 1500
                })
            } else if (nameRePassword != namePassword) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Password not the same',
                    showConfirmButton: false,
                    timer: 1500
                })

            } else {

                $.ajax({
                    url: '../view/ConnectDatabase/Register.php',
                    type: 'Post',
                    data: {
                        userId          : idUser,
                        displayName     : nameDisplay,
                        userName        : nameUser,
                        emailName       : nameEmail,
                        passwordName    : namePassword,
                        rePasswordName  : nameRePassword,

                    },
                    cash: false,
                    success: function(data) {
                        console.log(data);
                        if (data == "error") {

                            Swal.fire({
                                position: 'top-end',
                                icon: 'warning',
                                title: 'Email inValid',
                                showConfirmButton: false,
                                timer: 3000
                            })
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Register Success!',
                                showConfirmButton: false,
                                timer: 3000
                            })
                            Clear();
                        }

                    }

                })

            }


        })
    })

    // show Password

    function showPassword() {
        var x = document.getElementById("namePassword");

        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    // Show Password Login 
    function showPasswordLogin() {
        var y = document.getElementById('Password');
        if (y.type == 'password') {
            y.type = 'text';
        } else {
            y.type = 'password';
        }
    }
    // Fuction Clear 

    function Clear() {
        $('#nameDisplay').val('');
        $('#nameUser').val('');
        $('#nameEmail').val('');
        $('#namePassword').val('');
        $('#nameRePassword').val('');
    }

    // Login user
    // Login
    function Login() {
        var userName = $('#userName').val();
        var Password = $('#Password').val();

        if (userName == '' || userName == null) {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Please enter user name',
                showConfirmButton: false,
                timer: 1500
            })
        } else if (Password == null || Password == '') {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Please Password',
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            $.ajax({
                url: '../view/ConnectDatabase/Login.php',
                type: "POST",
                data: {
                    uname: userName,
                    psw: Password,
                },
                cash: false,
                success: function(result) {
                    if (result == 'done') {
                        window.open('Jobs.php', '_Self');
                        $('#userName').val('');
                        $('#Password').val('');
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Incorrect Username or Password ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }


                }
            })

        }
    }

    // form for Forget Password
    function LoginForget(e) {
        e.preventDefault();
        var forgetPassword = $('#forgetPassword').val();
        var idEmail = $('#idEmail').val();
        var emailInvalidation = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (forgetPassword == '' || forgetPassword == null) {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Email is required',
                showConfirmButton: false,
                timer: 1500
            })
        } else if (!emailInvalidation.test(forgetPassword)) {
            Swal.fire({
                position: 'top-end',
                icon: 'warning',
                title: 'Invalid email format',
                showConfirmButton: false,
                timer: 1500
            })
        } else {
            $.ajax({
                url: '../view/ConnectDatabase/ForgetPassword.php',
                type: 'POST',
                data: {
                    emailId: idEmail,
                    passwordForget: forgetPassword
                },
                cash: false,
                success: function(result) {
                    console.log(result);
                    if (result == "done") {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Please check your email',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'error',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            })
        }
    }
</script>

</html>