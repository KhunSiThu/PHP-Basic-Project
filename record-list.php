<?php include("./template/header.php") ?>

        <?php include("./template/sideBar.php") ?>

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
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="./index.php">
                        Area Calculator
                    </a>
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                    Record List
                </li>
            </ol>

            <hr class="border-gray-300 mb-4">

            <section>

            <?php 

            $fileName = "saveRecord.txt";

            if(!file_exists($fileName))
            {
                touch($fileName);
            }

            $fileStream = fopen($fileName,"r");

            while (!feof($fileStream)) :
                
                $content = fgets($fileStream);

                if($content === "\n")
                {
                    continue;
                }

            ?>

            <p class="font-mono text-gray-700 bg-white p-4 rounded-md mb-2">
                <?=$content ?>
            </p>

            <?php endwhile ?>

            <a href="./index.php" type="submit" class="mt-5 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Calculate Again
            </a>

            </section>

     

        </section>
        
<?php include("./template/footer.php") ?>