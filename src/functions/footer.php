<footer class="rounded-lg relative bottom-0 w-[100%] h-[2.5rem]">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-center">
                    <p class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="<?= WebsiteLogo() ?>" class="h-8 rounded-full" alt="<?= WebsiteName() ?> Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?= WebsiteName() ?></span>
                    </p>
                </div>
                <!-- <div class="my-6 sm:flex sm:items-center sm:justify-center">
                    <ul class="flex flex-wrap items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <li><a href="#" class="ho target="_blank"ver:underline me-4 md:me-6"></a>Test</li>
                    </ul>
                </div> -->
                <hr class="my-6 border-gray-200 sm:mx-80 dark:border-white lg:my-8" />
                <div class="flex items-center justify-center">
                    <a href="./pages/easteregg.php"><img src="./container/images/hellokitty.png" alt="" class="opacity-0 hover:opacity-[50%] ease-in-out duration-[300ms] w-4 rounded-full"></a><span class="block text-sm text-white sm:text-center dark:text-white"><?= WebsiteName() ?> © <?= $years ?>. All Rights Reserved.</span>
                </div>
            </div>
        </footer>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </body>
</html>