
<?php 
require_once '../snippets/Header.php' ;
?>

    <link href="../assets/css/custom-css.css" rel="stylesheet" />
  </head>
<body>
<div class="flex items-center justify-center min-h-screen px-10">
    <div class="px-8 py-8 text-left bg-white rounded-lg md:w-1/2 lg:w-1/2">
        <h3 class="text-2xl font-bold text-center text-black">Forgot Password</h3>
        <form action="">
            <div class="mt-4">
                <div class="mt-4">
                    <label class="block text-black" for="email">Email<label>
                            <input type="text" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 text-black">
                </div>
                <div class="flex">
                <a href="Login.php" class="px-6 mr-2 py-2 mt-6 text-white bg-[#f72929] rounded-lg hover:bg-[#c91111]">Cancel</a>
                <button class="px-6 py-2 mt-6 text-white bg-[#b6833b] rounded-md hover:bg-[#c5985f]">Submit</button>
                </div>
                <div class="mt-3">
                  <div id="Privacy" class="form-text">
                    <p>This site is protected by reCAPTCHA and the Google Privacy
                      Policy and Terms of Service apply.
                    </p>
                  </div>
                </div>
      </div>
    </div>

<?php require_once '../snippets/Footer.php';?>