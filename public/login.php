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
            WELCOME BACK !
        </h3>
        <form action="">
            <div class="mt-5">
                <div class="mt-4">
                    <label class="block text-white" for="email">Email<label>
                            <input type="text" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white">Password<label>
                            <input type="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-[#b6833b] rounded-full hover:bg-[#c5985f]">Sign In</button>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-white"> Remember me </label>
                    </div>
                    
                <div class="text-sm">
                    <a href="forgotpassword.php" class="font-medium text-white hover:underline"> Forgot your password? </a>
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
