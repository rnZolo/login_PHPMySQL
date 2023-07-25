<?php
            include 'login_registration_validation.php';
            $err = valildate();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--styling-->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=VT323&display=swap" rel="stylesheet">
    <script src="js/index.js" defer></script>
    <title>Welcome</title>

</head>
<body class="w-full h-screen bg-brown-800 px-[5%]">
        <!---Loginand Registration Section--->
    <Section class='w-full h-full grid place-content-center'>
        <div class="container flex w-[330px] h-fit min-h-[350px] p-5 bg-brown-50 rounded-md">

            <div class="login-wrapper h-full">
            <!--Login Form-->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="flex flex-col justify-between">
                <div class="flex px-1 mb-6">
                    <h1 class="inline w-full text-xl font-extrabold uppercase">Login</h1>
                    <span class="show-Reg toggle-forms w-p[100px] text-sm cursor-pointer">Register</span>
                </div>
                    <span class="error text-black text-sm"><?php  echo $err;?></span>
                    <label for="email" class="w-full p-1 mb-3 text-sm focus-within:font-extrabold">Username or Email : <span class="error text-black text-sm"><?php echo $err_ue_l;?></span><input type="text" name="user-l" id="user-l" autofocus class="w-full p-1 mb-3 text-sm"></label>
                    <label for="password" class="w-full p-1 mb-3 text-sm focus-within:font-extrabold">Password : <?php  echo $err_pass_l;?></span><input type="password" name="password" id="password" class="w-full p-1 mb-3 text-sm"></label>
                    <button type="submit-l" name="loginbtn" value="login" class="loginbtn bg-green-500 w-fit font-bold text-sm p-1 text-white rounded-md min-w-[75px] self-end hover:text-green-800 hover:bg-green-400 focus:bg-green-950">Log in</button>
                </form>
            </div>  
            <div class="registration-wrapper h-full" style="display:none">
                    <!--registration Form-->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="flex flex-col justify-between">
                    <div class="flex px-1 ">
                        <h1 class="inline w-full text-xl font-extrabold uppercase">Register</h1>
                        <span class="show-Login toggle-forms w-[100px] cursor-pointer">I have Account</span>
                    </div>
                        <span class="error text-black text-sm"><?php echo $err;?></span>
                        <label for="fname-r" class="text-sm p-1 focus-within:font-extrabold">First Name : <span class="error"></span><input type="text" name="fname-r" id="fname-r" class="w-full p-1 text-sm" autofocus></label>
                        <label for="lname-r" class="text-sm p-1 focus-within:font-extrabold">Last Name : <span class="error"></span><input type="text" name="lname-r" id="lname-r" class="w-full p-1 text-sm"></label>
                        <label for="username-r" class="text-sm p-1 focus-within:font-extrabold">Username : <span class="error"></span><input type="text" name="username-r" id="username-r" class="w-full p-1 text-sm"></label>
                        <label for="email-r" class="text-sm p-1 focus-within:font-extrabold">Email : <span class="error"></span><input type="text" name="email-r" id="email-r" class="w-full p-1 text-sm"></label>
                        <label for="password-r" class="text-sm p-1 focus-within:font-extrabold">Password : <span class="error"></span><input type="password" name="password-r" id="password-r" class="w-full p-1 text-sm"></label>
                        <label for="c-password-r" class="text-sm p-1 focus-within:font-extrabold">Confirm Password : <span class="error"></span><input type="password" name="c-password-r" id="c-password-r" class="w-full p-1 text-sm"></label>
                    <button type="submit-r" name="regbtn" value="register" class="bg-green-500  m-2 w-fit font-bold text-sm p-2 text-white rounded-md min-w-[75px] self-end hover:text-green-800 hover:bg-green-400"> Register </button>
                </form>
            </div>
        </dIv>
    </Section>
</body>
</html>