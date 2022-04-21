<?php
    require_once '../snippets/Header.php' ;
?>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ["Montserrat"],
                    },
                    colors: {
                        "dark-green": "#1E3F41",
                        "light-green": "#659093",
                        "cream": "#DDB07F",
                        "cgray": "#F5F5F5",
                    }
                }
            }
        }
    </script>
    <style>
        .in-active{
            width: 80px !important;
            padding: 20px 15px !important;
            transition: .5s ease-in-out;
        }
        .in-active ul li p{
            display: none !important;
        }

        .in-active ul li a{
            padding: 15px !important;
        }

        .in-active h2,
        .in-active h4,
        .in-active .logo-gradit{
            display: none !important;
        }
        .hidden{
            display: none !important;
        }
        .sidebar{
            transition: .5s ease-in-out;
        }
    </style>

</head>
<body>
    <div class="flex items-center">
        <!-- Left side (Sidebar) -->
        
        <?php require_once '../snippets/Sidebar.php' ; ?>


        <!-- Right side -->
        <div class="bg-gray-100 w-full h-screen px-10 py-6 flex flex-col gap-y-6 overflow-y-scroll">
            <!-- Header / Profile -->
            <div class="flex items-center gap-x-4 justify-end">
                <img class="w-10" src="../assets/icons/default_profile.svg" alt="Profile Image">
                <p class="text-dark-green font-semibold">Admin Name</p>
            </div>

            <!-- Breadcrumb -->
            <div>
                <ul class="flex items-center gap-x-4">
                    <li>
                        <a class="text-light-green" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>

            <!-- Topic Title -->
            <div>
                <p class="text-xl text-dark-green font-semibold">List All User With Roles</p>
            </div>

            <!-- Mentor -->
            <div class="md:flex items-center gap-x-4 w-full bg-white py-4 px-10 rounded-xl">
            <a href="admin_adduser.php"><svg class="w-6 h-6 md:place-items-center" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></a>
                <div class="">
                    <p class="text-dark-green text-base font-semibold">Tambahkan User</p>
                    <p class="text-light-green">dengan Roles yang bisa dipilih</p>
                </div>
            </div>

            <!-- Tab -->

            <!-- Direction -->


            <!-- Table Assignment -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                            <th scope="col" class="px-9 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-9 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-9 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-9 py-3">
                                Firstname
                            </th>
                            <th scope="col" class="px-9 py-3">
                                Lastname
                            </th>
                            <th scope="col" class="px-9 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-9 py-3">
                                <span class="sr-only">Edit</span>
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tbody>
                                <tr>
                                    <td scope="row" class="px-9 py-4 font-medium text-gray-900 dark:text-grey whitespace-nowrap"></td>
                                    <td class="px-9 py-4"></td>
                                    <td class="px-9 py-4"></td>
                                    <td class="px-9 py-4"></td>
                                    <td class="px-9 py-4"></td>
                                    <td class="px-9 py-4"></td>
                                    <td class="px-9 py-4"><a href="#">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                </tr>
                        </tbody>
                </table>
            </div>

        </div>
    </div>
    
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        let btnToggle = document.getElementById('btnToggle');
        let sidebar = document.querySelector('.sidebar');
        btnToggle.onclick = function(){
            sidebar.classList.toggle('in-active');
        }
    </script>
</body>
</html>
