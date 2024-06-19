<?php
$blue_button = "shadow bg-blue-600 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$green_button = "shadow bg-green-600 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$red_button = "shadow bg-red-600 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$teal_button = "shadow bg-teal-600 hover:bg-teal-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$indigo_button = "shadow bg-indigo-600 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded";
$years = date("2023 - Y");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | <?= WebsiteName() ?></title>
    <link rel="shortcut icon" href="<?= WebsiteLogo() ?>" type="image/x-icon">

    <!-- Awesome -->
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-white dark:bg-zinc-800 font-['Poppins'] flex flex-col">
    <nav class="bg-gray-800 border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?= WebsiteLogo() ?>" class="h-8 rounded-full" alt="<?= WebsiteName() ?> Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white"><?= WebsiteName() ?></span>
            </a>

            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ease-in duration-200" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" /></svg>
            </button>
            
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-gray-800 border-gray-700">
                    <li><a href="/" class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:hover:text-violet-700 md:p-0 font-bold text-white" aria-current="page">Acceuil</a></li>
                    <li><a href="/./src/pages/RageUIV2.php" class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:hover:text-violet-700 md:p-0 font-bold text-white">RageUI V2</a></li>
                    <!-- <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto font-bold">
                            Dropdown
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" /></svg>
                        </button>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
            <li><a href="/" class="block px-4 py-2 hover:text-gray-100"></a></li>
        </ul>
    </div> -->