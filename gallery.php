<?php include("template/header.php") ?>

<?php include("template/sideBar.php") ?>

<section class="bg-gray-100 p-10 rounded-lg">

    <form class="max-w-sm" method="post" enctype="multipart/form-data" action="gallery-process.php">
        <label for="file-input" class="sr-only">Choose file</label>
        <input type="file" name="upload[]" multiple id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
        file:me-4
        file:py-3 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400">

        <button type="submit" class="mt-5 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Upload
        </button>

    </form>

</section>

<?php $photos = array_filter(scandir("photos"), fn($el) => $el != "." && $el != ".."); ?>

<section class="colums-3 gap-5 mt-5">
    <?php foreach ($photos as $photo) : ?>
        <div class="inline-block relative group">
            <img class="rounded-lg" src="photos/<?= $photo ?>" alt="">
            <a onclick="return confirm('Are you sure to delete?')" href="gallery-photo-delete.php?file_name=<?= $photo ?>" type="button" class="absolute hidden pointer-events-none bottom-1 right-1 py-3 px-4 group-hover:inline-flex group-hover:pointer-events-auto items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </a>
        </div>
    <?php endforeach ?>
</section>

<?php include("template/footer.php") ?>