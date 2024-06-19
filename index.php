<?php
require_once("./src/functions/functions.php");

$title = "Documentation LUA";
require_once("./src/functions/navbar.php");
?>


<div class="mx-auto my-4 grid grid-cols-2 md:grid-cols-4 gap-4 relative">

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-400 border border-yellow-400">Documentation</span>

        <a href="/./src/pages/RageUIV2.php">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">RageUI V2</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ceci est la documentation de RageUI V2 pour créer des menus.</p>
        <a href="/./src/pages/RageUIV2.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-800">
            Voir plus
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
        </a>
    </div>

</div>


<?php require_once("./src/functions/footer.php"); ?>