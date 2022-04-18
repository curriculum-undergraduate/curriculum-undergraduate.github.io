<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  </head>
  <body>
    <div class="container px-8 max-w-md mx-auto sm:max-w-xl md:max-w-5xl lg:flex lg:max-w-full lg:p-0">
        <div class="lg:p-16 lg:flex-1">
        <h2 class="text-4xl font-bold text-[#1e3f41] tracking-wider sm:text-4xl">
                Curriculum Undergaduate
        </h2>
        <h3 class="text-3xl font-bold text-[#b6833b] tracking-wider sm:text-3xl mt-3">
            Register Here
        </h3> 
        <img src="img/work.jpg" class="mt-4 rounded-xl shadow-md sm:mt-6 sm:h-64 sm:w-full sm:object-cover sm:object-top sm:hidden">
        <form action="">
            <div class="mt-5">
                <div>
                    <label class="block" for="Name">Name<label>
                            <input type="text" placeholder="Name"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Confirm Password<label>
                            <input type="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <span class="text-xs text-red-400">Password must be same!</span>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white bg-[#b6833b] rounded-full hover:bg-[#c5985f]">Create
                        Account</button>
                </div>
                <div class="mt-6 text-grey-dark">
                    Already have an account?
                    <a class="text-blue-600 hover:underline" href="#">
                        Log in
                    </a>
                </div>
            </div>
        </form>
        </div>
        <div class="hidden lg:flex lg:w-1/2 my-auto">
            <img src="img/work.jpg" class="rounded-l-full shadow-xl lg:mt-6 lg:h-80 lg:w-full lg:object-cover lg:object-top">
        </div>
    </div>
  </body> 
</html>
