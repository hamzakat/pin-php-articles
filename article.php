<?php
$PAGE_TITLE = "Article";
require("layout/head.php");
?>

<!-- Article -->
<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-15 lg:w-2/ md:w-3/4 mx-auto">
        <div class="flex justify-between mb-6">
            <span>By <strong>Samer </strong><span class="text-xs text-gray-400">(Samer@mail.com)</span></span>
            <span class="text-xs text-gray-400">12 Jun 2019</span>
        </div>

        <p class="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore tempora omnis nam, distinctio iste repellendus accusantium maxime voluptas dolore in odit tenetur dolor eveniet nobis quae modi ad repellat quasi!
            Nam quos sed voluptatibus corrupti laboriosam, eos quas rem aut molestias harum, non voluptas. Cumque debitis earum iure officia deleniti, obcaecati tempora. Rerum repellat dignissimos soluta reiciendis magni ullam voluptatibus.
            Dignissimos obcaecati fuga eligendi molestias iste vel illo voluptatum aspernatur, ab tenetur fugiat, neque nesciunt doloribus ipsum fugit quidem esse ex quia.
        </p>

    </div>
</section>

<!-- Comments -->
<div class="antialiased sm:mx-auto mx-10 max-w-screen-sm mt-20">
    <h3 class="mb-4 text-xl font-semibold text-gray-900">Comments</h3>

    <div class="divide-y divide-y-2 divide-gray-100">

        <div class="flex space-y-4 ">

            <div class="flex-1 px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <div class="flex justify-between">
                    <span><strong>Ahmad </strong><span class="text-xs text-gray-400">ahmad@mail.com</span></span>
                    <span class="text-xs text-gray-400">12 Jun 2019</span>

                </div>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua.
                </p>
            </div>


        </div>

        <div class="flex space-y-4 ">

            <div class="flex-1 px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <div class="flex justify-between">
                    <span><strong>Ahmad </strong><span class="text-xs text-gray-400">ahmad@mail.com</span></span>
                    <span class="text-xs text-gray-400">12 Jun 2019</span>
                </div>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua.
                </p>
            </div>


        </div>

    </div>

    <!-- comment form -->
    <div class="flex flex-wrap mt-10">
        <div class="p-2 w-1/2">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        </div>
        <div class="p-2 w-1/2">
            <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
        </div>

        <div class="p-2 w-full">
            <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Content</label>
                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
        </div>
        <div class="p-2 w-full">
            <button class="flex text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add Comment</button>
        </div>


    </div>
</div>



<?php require("layout/footer.php") ?>