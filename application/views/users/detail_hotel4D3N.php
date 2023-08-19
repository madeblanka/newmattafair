<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/pikaday@1.8.0/css/pikaday.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/pikaday@1.8.0"></script> -->
    <title>Free & Easy 4D3N</title>
</head>

<body class="">
    <?php include "./partials/navbar.php" ?>

    <form action="process.php" method="post">
        <section class="p-10">
            <div class="bg-white p-10 rounded-xl">
                <h1 class="font-bold text-lg md:text-3xl mb-10">Free & Easy 4D3N</h1>
                <!-- <h1 class="font-thin text-md mb-10 ml-3">Hotel</h1> -->
                <div class="flex md:flex-row flex-col gap-5 h-64 md:h-96    ">
                    <div class="flex gap-5 md:w-2/3 ">
                        <a data-lightbox="image-1" href="./assets/img/slider1.jpg" class="md:w-[100%] md:max-w-[100%]" alt="">
                            <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                        </a>
                    </div>
                    <div class="flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                        <a data-lightbox="image-1" href="./assets/img/slider2.jpg" class="rounded-lg w-full h-[50%]   md:full object-cover" alt="">
                            <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                        </a>
                        <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                            <a data-lightbox="image-1" href="./assets/img/slider3.jpg">

                                <div class="flex rounded-xl z-50 opacity-100 h-full cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white  items-center">
                                    <div>
                                        <div class="transform-gpu   p-4 space-y-3 text-xl text-center  pb-10 transform ">
                                            <div class="font-semibold text-xs md:text-2xl">See more picture....</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="./assets/img/slider3.jpg">
                                <img alt="" class="rounded-lg w-full  md:full object-cover" src="./assets/img/slider3.jpg" />
                            </a>
                        </div>
                    </div>
                    <div class="hidden flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                        <a data-lightbox="image-1" href="./assets/img/slider2.jpg" class="rounded-lg w-full  md:full object-cover" alt="">
                            <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                        </a>
                        <a data-lightbox="image-1" href="./assets/img/slider3.jpg" class="rounded-lg w-full  md:full object-cover" alt="">
                            <img src="./assets/img/slider3.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-5">
                <div class="bg-white md:p-10 rounded-xl md:mt-10 flex-[60%]">
                    <h1 class="font-bold mb-10 md:text-3xl text-xl text-center">3D2N F & E Hotel</h1>

                    <div class="container mx-auto md:p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Package 1 -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Paasha Atelier Kuta</h2>
                                <div class="text-gray-600 mb-2">
                                    <p class="font-semibold mb-10 ml-2">Start From MYR. 237</p>

                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Benefits</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul class="hidden py-2 space-y-2" id="dropdown-example">
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>Benefits: For min 2 nights stay will upgrade to next category at Superior Pool View </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>For min 3 nights stay will upgrade to next category at Superior Pool View. </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>1x Floating breakfast at main pool OR 1x afternoon tea for couple</span>
                                        </li>
                                    </ul>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                    </div>



                                </div>
                                <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                    <div class="flex items-center text-center mx-auto ">
                                        <input id="default-radio-1" type="radio" value="" name="radio-button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Package 1 -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Paasha Atelier Kuta</h2>
                                <div class="text-gray-600 mb-2">
                                    <p class="font-semibold mb-10 ml-2">Start From MYR. 237</p>

                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Benefits</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul class="hidden py-2 space-y-2" id="dropdown-example1">
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>Benefits: For min 2 nights stay will upgrade to next category at Superior Pool View </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>For min 3 nights stay will upgrade to next category at Superior Pool View. </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>1x Floating breakfast at main pool OR 1x afternoon tea for couple</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                    <div class="flex items-center text-center mx-auto ">
                                        <input id="default-radio-3" type="radio" value="" name="radio-button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-3" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Package 1 -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Paasha Atelier Kuta</h2>
                                <div class="text-gray-600 mb-2">
                                    <p class="font-semibold mb-10 ml-2">Start From MYR. 237</p>

                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Benefits</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul class="hidden py-2 space-y-2" id="dropdown-example2">
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>Benefits: For min 2 nights stay will upgrade to next category at Superior Pool View </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>For min 3 nights stay will upgrade to next category at Superior Pool View. </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>1x Floating breakfast at main pool OR 1x afternoon tea for couple</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                    <div class="flex items-center text-center mx-auto ">
                                        <input id="default-radio-2" type="radio" value="" name="radio-button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Package 1 -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Paasha Atelier Kuta</h2>
                                <div class="text-gray-600 mb-2">
                                    <p class="font-semibold mb-10 ml-2">Start From MYR. 237</p>

                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Benefits</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul class="hidden py-2 space-y-2" id="dropdown-example3">
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>Benefits: For min 2 nights stay will upgrade to next category at Superior Pool View </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>For min 3 nights stay will upgrade to next category at Superior Pool View. </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>1x Floating breakfast at main pool OR 1x afternoon tea for couple</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                    <div class="flex items-center text-center mx-auto ">
                                        <input id="default-radio-4" type="radio" value="" name="radio-button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-4" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Package 1 -->
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h2 class="text-2xl font-semibold mb-4">Paasha Atelier Kuta</h2>
                                <div class="text-gray-600 mb-2">
                                    <p class="font-semibold mb-10 ml-2">Start From MYR. 237</p>

                                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Benefits</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul class="hidden py-2 space-y-2" id="dropdown-example4">
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>Benefits: For min 2 nights stay will upgrade to next category at Superior Pool View </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>For min 3 nights stay will upgrade to next category at Superior Pool View. </span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                            <span>1x Floating breakfast at main pool OR 1x afternoon tea for couple</span>
                                        </li>
                                    </ul>

                                </div>
                                <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                    <div class="flex items-center text-center mx-auto ">
                                        <input id="default-radio-5" type="radio" value="900" name="radio_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-5" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
                <div class="flex flex-col flex-[40%]">
                    <div class="bg-white p-10 rounded-xl mt-10 ">
                        <h1 class="font-bold mb-10 md:text-3xl text-md text-start">Optional</h1>

                        <div class="flex w-full">

                            <input id="default-checkbox" type="checkbox" name="checkboxes[]" value="250" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center w-full justify-between mb-4">
                                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour A</label>
                                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">MYR 900</label>
                            </div>
                        </div>
                        <div class="flex w-full">

                            <input id="default-checkbox1" type="checkbox" name="checkboxes[]" value="250" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center w-full justify-between mb-4">
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour A</label>
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">MYR 900</label>
                            </div>
                        </div>
                        <div class="flex w-full">

                            <input id="default-checkbox1" type="checkbox" name="checkboxes[]" value="250" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center w-full justify-between mb-4">
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour A</label>
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">MYR 900</label>
                            </div>
                        </div>
                        <div class="flex w-full">

                            <input id="default-checkbox1" type="checkbox" name="checkboxes[]" value="250" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center w-full justify-between mb-4">
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour A</label>
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">MYR 900</label>
                            </div>
                        </div>
                        <div class="flex w-full">

                            <input id="default-checkbox1" type="checkbox" name="checkboxes[]" value="250" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <div class="flex items-center w-full justify-between mb-4">
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tour A</label>
                                <label for="default-checkbox1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">MYR 900</label>
                            </div>
                        </div>

                    </div>

                    <div class="container mx-auto md:p-10">
                        <div class="bg-white p-10 rounded-xl shadow-md">

                            <h1 class="font-bold md:text-3xl text-xl mb-6">Date Check-in Check-out</h1>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Check-in/Checkout</label>
                            <div class="flex flex-col md:flex-row items-center mb-4">
                                <div class="relative  w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input type="date" name="checkin" id="checkin" class="form-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="updatedate();" min="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <span class="text-gray-500 md:mr-4 md:ml-4">to</span>
                                <div class="relative w-full" style="margin-left: 0px !important;">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input type="date" name="checkout" id="checkout" class="form-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="">
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                                <div class="flex flex-col md:flex-row gap-10 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Adult</h1>
                                        <input type="number" min="1" id="adult" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Child</h1>
                                        <input type="number" min="0" id="child" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6 ">
                                <!-- <label for="text" id="inputContainer" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white">Extend Night</label>
                            <label for="text" id="inputContainer" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Room</label>
                            <div class="flex">
                                <input type="number" id="jml_kamar" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div> -->

                                <label for="countries" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Total Bed</label>
                                <input type="text" id="totalBed" name="total_bed" value="" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>

                            </div>
                            <div class="mb-6 hidden" id="inputContainer">
                                <!-- <label for="text" id="inputContainer" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white">Extend Night</label>
                            <label for="text" id="inputContainer" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Room</label>
                            <div class="flex">
                                <input type="number" id="jml_kamar" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                            </div> -->

                                <label for="countries" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Choose Child Bed Type</label>
                                <select id="childbed" name="selected_baby" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0.85">With Bed</option>
                                    <option value="0.65">Sharing Bed</option>
                                </select>

                            </div>
                            <div class="mb-6 "> 
                                <label for="countries" class=" mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-white">Choose  Bed Type</label>
                                <select id="childbed" name="selected_option" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="900">Single</option>
                                    <option value="800">Twin</option>
                                    <option value="700">Triple</option>
                                </select>

                            </div>
                            <button type="submit" class="w-full text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Book</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-semibold mb-4">3D2N OR 4N3D - FREE & EASY PACKAGE:</h1>
        <div class="bg-gray-100 p-4 rounded-lg">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-500 w-10 h-10 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-600">DAY 1: ARRIVE - CHECK IN HOTEL (-)</p>
                    <p class="font-semibold">Arrive at Bali Ngurah Rai International airport, meeting service with our local tour guide, transfer to hotel for check in </p>
                </div>
            </div>
            <div class="flex items-center space-x-4 mt-4">
                <div class="bg-blue-500 w-10 h-10 flex items-center justify-center rounded-full">
                    <!-- Location icon for in transit stage -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-600">DAY 2: FREE PROGRAM OR JOIN OPTIONAL TOUR (B)</p>
                    <p class="font-semibold"> Breakfast at Hotel and Free program at your own arrangement - Or join our optional tour program </p>
                </div>
            </div>
            <div class="flex items-center space-x-4 mt-4">
                <div class="bg-blue-500 w-10 h-10 flex items-center justify-center rounded-full">
                    <!-- Location icon for in transit stage -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-600">DAY 3: FREE PROGRAM OR JOIN OPTINAL TOUR OR CHECK OUT - AIRPORT (B)</p>
                    <p class="font-semibold">Breakfast at Hotel and Free program at your own arrangement - Or join our optional tour program </p>
                </div>
            </div>
            <div class="flex items-center space-x-4 mt-4">
                <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                    <!-- Location icon for delivered stage -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-600">DAY 4: CHECK OUT - AIRPORT (B)</p>
                    <p class="font-semibold">Breakfast at hotel. Free program and transfer to airport.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- tour package -->
    <div class="px-10 py-24">
        <h1 class="text-3xl font-semibold mb-10 text-center">Related Post</h1>
        <div class="carousel-container overflow-hidden ">
            <div class="carousel1 flex  transition-transform duration-300 md:gap-2 lg:gap-6 mx-auto">
                <!-- Your carousel items here -->
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item flex-none w-full md:w-[50%] lg:w-[23.5%]">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="./assets/img/slider1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Denpasar 6D</h5>
                            </a>
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400 line-through mb-[-5px]">Myr.1.115.000</p>
                            <p class="mb-3 text-lg text-[#1f3b6f] dark:text-gray-400 font-bold">Myr.1.115.000</p>
                            <a href="./detail_tour.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include "./partials/footer.php" ?>
    <script>
        tailwind.config = {
          darkMode: 'class',
        }
      </script>
    <script src="./scripts/childInput.js"></script>
    <script>
        const adultInput = document.getElementById('adult');
        const totalBedInput = document.getElementById('totalBed');

        adultInput.addEventListener('input', function() {
            const adultValue = parseInt(adultInput.value);
            totalBedInput.value = Math.ceil(adultValue.toString() / 2);
        });
    </script>
    <script>
        function updatedate() {
            var checkinInput = document.getElementById("checkin");
            var checkoutInput = document.getElementById("checkout");

            var firstdate = new Date(checkinInput.value);
            var newCheckoutDate = new Date(firstdate);
            newCheckoutDate.setDate(newCheckoutDate.getDate() + 3); // Add 3 days

            var formattedCheckoutDate = newCheckoutDate.toISOString().split('T')[0];

            checkoutInput.value = formattedCheckoutDate;
            checkoutInput.setAttribute("min", formattedCheckoutDate);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/datepicker.min.js"></script>
    <script src="./scripts/dateRange.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="./scripts/input.js"></script>
    <script src="./scripts/index.js"></script>
</body>

</html>