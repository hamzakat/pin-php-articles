<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($PAGE_TITLE) ? $PAGE_TITLE : "Title" ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>

</head>

<body>

    <section class="text-gray-600 body-font mt-5">
        <div class="container px-5 py-5 mx-auto">
            <div class="flex flex-col text-center w-full mb-5">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Made by <a class="font-bold" href="https://github.com/hamzakat/pin-php-articles">Hamza Kattan</a></h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font my-4 text-gray-900"> <?php echo isset($PAGE_TITLE) ? $PAGE_TITLE : "Title" ?> </h1>
                <?php
                if (isset($DESCRIPTION)) {
                    echo "<p class=\"lg:w-2/3 mx-auto leading-relaxed text-base\">" . $DESCRIPTION . "</p>";
                }
                ?>

            </div>
        </div>
    </section>