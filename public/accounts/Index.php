<?php
require_once '../snippets/Header.php';
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
    .in-active {
        width: 80px !important;
        padding: 20px 15px !important;
        transition: .5s ease-in-out;
    }

    .in-active ul li p {
        display: none !important;
    }

    .in-active ul li a {
        padding: 15px !important;
    }

    .in-active h2,
    .in-active h4,
    .in-active .logo-gradit {
        display: none !important;
    }

    .hidden {
        display: none !important;
    }

    .sidebar {
        transition: .5s ease-in-out;
    }
</style>

</head>

<body>
    <div class="flex items-center">
        <!-- Left side (Sidebar) -->

        <?php require_once '../snippets/Sidebar.php'; ?>


        <!-- Right side -->
        <div class="bg-gray-100 w-full h-screen px-10 py-6 flex flex-col gap-y-6 overflow-y-scroll">
            <!-- Header / Profile -->
            <div class="flex items-center gap-x-4 justify-end">
                <img class="w-10" src="../assets/icons/default_profile.svg" alt="Profile Image">
                <p class="text-dark-green font-semibold">Admin</p>
            </div>

            <!-- Breadcrumb -->
            <div>
                <ul class="flex items-center gap-x-4">
                    <li>
                        <a class="text-light-green text-2xl" href="#">Profile</a>
                    </li>
                </ul>
            </div>
            <div class="grid sm:grid-cols-3 gap-4">
                <div class="bg-white w-full md:mr-6 rounded-md sm:h-96 shadow-sm ">
                    <div class="text-center py-10">
                        <img src="../assets/img/user.jpg" alt="" class="w-40 rounded-full mx-auto">
                        <p class="text-gray-500">Student</p>
                        <h3 class="text-xl">Thomas Mueller</h3>
                        <div class="mt-11">
                            <a href="#">
                                <i class="fab fa-facebook-square text-neutral-800 text-3xl sm:text-4xl"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram text-neutral-800 text-3xl sm:text-4xl ml-7 mr-7"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter text-neutral-800 text-3xl sm:text-4xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2 bg-white rounded-md pb-12 shadow-sm">
                    <div class="mx-8 md:my-8 my-10">
                        <form>
                            <div class="mb-4 border-b border-gray-200">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                                    data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab"
                                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Course</button>
                                    </li>
                                    <li class="sm:mr-2" role="presentation">
                                        <button
                                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                            aria-controls="dashboard" aria-selected="false">Edit
                                            Profile</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile"
                                    role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="mt-5">
                                        <div class="flex justify-start sm:justify-start">
                                            <div
                                                class="w-20 h-20 rounded-full border-2 border-green-500 flex justify-center items-center">
                                                <p>100%</p>
                                            </div>
                                        </div>
                                        <h3 class="text-lg sm:text-xl text-left mt-5 sm:-mt-16 sm:text-left sm:ml-28">
                                            Pemrograman Web</h3>
                                        <p class="text-sm text-gray-500 text-left sm:text-left sm:ml-28">Start
                                            date
                                            Thursday, 21 April 2022</p>
                                    </div>
                                    <div class="mt-16">
                                        <div class="flex justify-start sm:justify-start">
                                            <div
                                                class="w-20 h-20 rounded-full border-2 border-green-500 flex justify-center items-center">
                                                <p>100%</p>
                                            </div>
                                        </div>
                                        <h3 class="text-lg sm:text-xl text-left mt-5 sm:-mt-16 sm:text-left sm:ml-28">
                                            Android Development</h3>
                                        <p class="text-sm text-gray-500 text-left sm:text-left sm:ml-28">Start
                                            date
                                            Thursday, 21 April 2022</p>
                                    </div>
                                    <div class="mt-16">
                                        <div class="flex justify-start sm:justify-start">
                                            <div
                                                class="w-20 h-20 rounded-full border-2 border-green-500 flex justify-center items-center">
                                                <p>100%</p>
                                            </div>
                                        </div>
                                        <h3 class="text-lg sm:text-xl text-left mt-5 sm:-mt-16 sm:text-left sm:ml-28">
                                            Project Management</h3>
                                        <p class="text-sm text-gray-500 text-left sm:text-left sm:ml-28">Start
                                            date
                                            Thursday, 21 April 2022</p>
                                    </div>
                                    <div class="mt-16">
                                        <div class="flex justify-start md:justify-start">
                                            <div
                                                class="w-20 h-20 rounded-full border-2 border-green-500 flex justify-center items-center">
                                                <p>100%</p>
                                            </div>
                                        </div>
                                        <h3 class="text-lg sm:text-xl text-le ftmt-5 sm:-mt-16 sm:text-left sm:ml-28">
                                            UI/UX Design</h3>
                                        <p class="text-sm text-gray-500 text-le sm:text-left sm:ml-28">Start
                                            date
                                            Thursday, 21 April 2022</p>
                                    </div>
                                </div>
                                <div class="hidden p-4 2xl:bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard"
                                    role="tabpanel" aria-labelledby="dashboard-tab">

                                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                                        <div class="mb-6">
                                            <label for="firstName"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First
                                                name</label>
                                            <input type="text" id="firstName"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="First name" required>
                                        </div>
                                        <div class="mb-6">
                                            <label for="lastName"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last
                                                name</label>
                                            <input type="text" id="lastName"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Last name" required>
                                        </div>
                                        <div class="mb-6">
                                            <label for="emailAddress"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                                                Address</label>
                                            <input type="email" id="emailAddress"
                                                class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400""
                                            placeholder=" mail@example.com" required>
                                            <p class="mt-2 text-sm text-red-500 dark:text-red-500"><span
                                                    class="font-medium">Your must,</span> Verification This Email!
                                            </p>
                                        </div>
                                        <div class="mb-6">
                                            <label for="dateOfBirth"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date
                                                of
                                                Birth</label>
                                            <input type="date" id="dateOfBirth"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
                                        </div>
                                        <div class="mb-6">
                                            <label for="gender"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gender</label>
                                            <select id="countries"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-6">
                                            <label for="phoneNumber"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone</label>
                                            <input type="tel" id="phoneNumber"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="(+62) 012 3456 789" required>
                                        </div>
                                    </div>
                                    <div class="mb-6">
                                        <label for="alamatDomisili"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                                            Domisili</label>
                                        <textarea id="alamatDomisili" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Jl. Jenderal Sudirman..." required></textarea>
                                    </div>
                                    <div class="mb-6 text-right">
                                        <button type="submit"
                                            class="sm:w-32 text-white bg-[#DDB07F] hover:bg-[#bd9161] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
        <script>
            let btnToggle = document.getElementById('btnToggle');
            let sidebar = document.querySelector('.sidebar');
            btnToggle.onclick = function () {
                sidebar.classList.toggle('in-active');
            }
        </script>
</body>

</html>