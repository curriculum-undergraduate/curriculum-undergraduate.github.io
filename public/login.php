<?php 
require_once 'config/function.php';
login_user();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/custom-css.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container px-8 max-w-md mx-auto sm:max-w-xl md:max-w-5xl lg:flex lg:max-w-full lg:p-0">
        <div class="lg:p-16 lg:mt-8 lg:flex-1">
        <h2 class="text-4xl font-bold text-white tracking-wider sm:text-4xl">
                Curriculum Undergaduate
        </h2>
        <h3 class="text-3xl font-semibold text-white tracking-wider sm:text-3xl mt-3">
            Welcome Back!
        </h3>

        <?php
            if(isset($_SESSION['MESSAGE']))
                { ?>
                    <div class="flex p-4 mt-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                    <span class="font-medium"> <?=display_message()?></span>
                    </div>
                    </div>
                <?php } ?>


        <form method="post">
            <div class="mt-5">
                <div class="mt-4">
                    <label class="block text-white" for="email">Email<label>
                            <input type="text" placeholder="Email" name="email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 text-black">
                </div>
                <div class="mt-4">
                    <label class="block text-white">Password<label>
                            <input type="password" placeholder="Password" name="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 text-black">
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-[#b6833b] rounded-full hover:bg-[#c5985f]" name="btn_login">Sign In</button>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-white"> Remember me </label>
                    </div>
                    
                <div class="text-sm">
                    <a href="forgot-pass.php" class="font-medium text-white hover:underline"> Forgot your password? </a>
                </div>
            </div>


                <div class="mt-6 text-white place-items-end">
                    Don't have an account?,
                    <a class="text-white font-bold hover:underline" href="register.php">
                        Sign Up
                    </a>
                </div>
            </div>
        </form>
        </div>
        <div class="hidden lg:flex lg:w-1/2 my-auto p-36">
            <img src="img/laptop2.png" class="animate-bounce-slow lg:mt-10 lg:h-full lg:w-80 lg:object-scale-down lg:object-top">
        </div>
    </div>
  </body> 
</html>
