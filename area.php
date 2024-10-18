<?php 

    if(empty($_POST["width"]) || empty($_POST["breadth"])) {
        header("Location:index.php");
    }

?>


<?php include("template/header.php") ?>

        <?php include("template/sideBar.php") ?>

        <section class="bg-gray-100 p-10 rounded-lg">

            <ol class="flex items-center whitespace-nowrap mb-4">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Home
                    </a>
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="index.php">
                        Area Calculator
                    </a>
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                    Calculate Result
                </li>
            </ol>

            <hr class="border-gray-300 mb-4">

            <?php

            $width = $_POST["width"];
            $breadth = $_POST["breadth"];

            $area = $width * $breadth;

            $fileName = "saveRecord.txt";

            if(!file_exists($fileName))
            {
                touch($fileName);
            }

            $fileStream = fopen($fileName,"a");
            fwrite($fileStream,"\n$width * $breadth = $area");
            fclose($fileStream);

            ?>

            <p class="text-3xl text-center">
                <?= $area ?> Sqft
            </p>

            <div class="flex gap-3">
                <a href="./index.php" type="submit" class="flex-grow mt-5 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Calculate Again
                </a>
                <a href="./record-list.php" type="submit" class="flex-grow mt-5 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    All Record
                </a>
            </div>

        </section>

<?php include("template/footer.php") ?>