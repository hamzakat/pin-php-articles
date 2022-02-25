<?php require("layout/head.php") ?>

<section class="text-gray-600 body-font mt-5">
    <div class="container px-5 py-5 mx-auto">
        <div class="flex flex-col text-center w-full mb-5">
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Made by <a class="font-bold" href="https://github.com/hamzakat">Hamza Kattan</a></h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">PIN Articles</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">My submission for <a class="text-indigo-500" href="https://github.com/humansis/php-assignment">https://github.com/humansis/php-assignment</a></p>
        </div>

        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add Article</button>
    </div>
</section>
<section class="text-gray-600 body-font overflow-hidden">
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