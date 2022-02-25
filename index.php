<?php
$PAGE_TITLE = "Articles";
$DESCRIPTION = "My submission for <a class=\"text-indigo-500\" href=\"https://github.com/humansis/php-assignment\">https://github.com/humansis/php-assignment</a>";
require("layout/head.php");
?>


<section class="text-gray-600 body-font overflow-hidden">
    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="/add-article.php">Add Article</a></button>
    <div class="container px-5 py-24 mx-auto">
        <div class="-my-8 divide-y-2 divide-gray-100">
            <div class="py-8 flex flex-wrap md:flex-nowrap">
                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                    <span class="font-semibold title-font text-gray-700">Author</span>
                    <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                </div>
                <div class="md:flex-grow">
                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Title</h2>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis praesentium harum nobis nulla molestias vel, illum atque assumenda dolorem, cupiditate quo, nemo voluptates recusandae ratione asperiores numquam nam. Quam, rerum?</p>
                    <a class="text-indigo-500 inline-flex items-center mt-4">Read More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require("layout/footer.php") ?>