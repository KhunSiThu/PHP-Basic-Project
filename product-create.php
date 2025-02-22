<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<section class=" bg-gray-100 p-10 rounded-lg ">

    <h3 class=" text-2xl font-serif font-bold">Create Product</h3>
    <hr class=" my-5">
    <form action="./product-save.php" method="post" enctype="multipart/form-data">

        <div class="mb-5">
            <label for="product_name" class="block text-sm font-medium mb-2 dark:text-white">Product Name</label>
            <input required type="text" id="product_name" name="product_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="eg. Apple">
        </div>

        <div class="mb-5">
            <label for="product_price" class="block text-sm font-medium mb-2 dark:text-white">Product Price</label>
            <input required type="number" id="product_price" name="product_price" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="eg. 500">
        </div>

        <div class="mb-5">
            <label for="product_rating" class="block text-sm font-medium mb-2 dark:text-white">User Rating</label>
            <!-- Select -->
            <select required data-hs-select='{
            "placeholder": "Select Rating ",
            "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
            "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
            }' class="hidden" name="product_rating">
                <option value="">Select Rating</option>

                <?php for ($i = 1; $i <= 5; $i++) : ?>

                    <option value="<?= $i ?>"><?= $i ?></option>

                <?php endfor; ?>

            </select>
            <!-- End Select -->
        </div>

        <div class=" mb-10">
            <label class="block text-sm font-medium mb-2 dark:text-white">
                Product Image
            </label>
            <div class="relative ">

                <label class="block">
                    <span class="sr-only">Choose product photo</span>
                    <input required type="file" name="product_image" class="block w-full text-sm text-gray-500
                file:me-4 file:py-2 file:px-4
                file:rounded-lg file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-600 file:text-white
                hover:file:bg-blue-700
                file:disabled:opacity-50 file:disabled:pointer-events-none
                dark:file:bg-blue-500
                dark:hover:file:bg-blue-400
                ">
                </label>
            </div>
        </div>




        <div class="flex justify-end">
            <button  class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Save Product
            </button>
        </div>
    </form>

</section>
<?php include("./template/footer.php"); ?>