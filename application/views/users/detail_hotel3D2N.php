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
    <title>Free & Easy 3D2N</title>
</head>

<body class="">
    <?php $this->load->view('users/_partials/navbar.php')?>

    <form action="<?= base_url('main/formguest')?>"  method="post" enctype="multipart/form-data">
        <section class="p-10">
            <div class="bg-white md:p-10 rounded-xl">
                <h1 class="font-bold text-lg md:text-3xl mb-10">Free & Easy 3D2N</h1>
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
            <!-- 3D2N Packages -->
            <div class="flex flex-col md:flex-row gap-5 md:mt-0 mt-32">
                <div class="bg-white md:p-10 rounded-xl md:mt-10 flex-[60%]">
                    <h1 class="font-bold mb-10 md:text-3xl text-xl text-center">3D2N F & E Hotel</h1>

                    <div class="container mx-auto md:p-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Package 1 -->
                            <?php $key = 1;?>
                            <?php foreach($package as $p):?>
                            <div class="">
                                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="<?php echo $key;?>" data-collapse-toggle="<?php echo $key;?>">
                                    <input type="hidden" value=<?= $p->id_package?> name="id_package[]">
                                    <span class="flex-1 text-xl md:text-xl ml-3 text-left font-semibold whitespace-nowrap"><?= $p->name?></span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <div class="hidden py-2 space-y-2" id="<?php echo $key;?>">
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <!-- <h2 class="text-2xl font-semibold mb-4">Paasha Atelier Kuta</h2> -->
                                        <p class="font-semibold mb-4 ml-2">Start From MYR. <?= $p->startfrom?></p>

                                        <div class="flex gap-5 md:w-full mb-4">
                                            <a data-lightbox="image-2" href="<?= site_url('package/'.$p->image)?>" class="md:w-[100%] md:max-w-[100%]" alt="">
                                                <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                                            </a>
                                        </div>
                                        <div class="hidden flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                                            <a data-lightbox="image-2" href="./assets/img/slider2.jpg" class="rounded-lg w-full h-[50%]   md:full object-cover" alt="">
                                                <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                                            </a>
                                            <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                                                <a data-lightbox="image-2" href="./assets/img/slider3.jpg">

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
                                        <div class="text-gray-600 mb-2">
                                            <div class="mb-6">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                                                <div class="flex flex-col md:flex-row gap-10 ">
                                                    <div class="flex flex-col w-full">
                                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Adult</h1>
                                                        <input type="number" name="adult" min="1" id="adult" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                                    </div>
                                                    <div class="flex flex-col w-full">
                                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Child</h1>
                                                        <input type="number" name="child" min="0" id="child" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="benefit<?php echo $key;?>" data-collapse-toggle="benefit<?php echo $key;?>">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                </svg>
                                                <span class="flex-1 ml-3 text-left whitespace-nowrap">Benefits</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <ul class="hidden py-2 space-y-2" id="benefit<?php echo $key; $key++?>">
                                                <li class="flex items-center space-x-3">
                                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                    </svg>
                                                    <span><?= $p->benefit1?></span>
                                                </li>
                                                <li class="flex items-center space-x-3">
                                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                    </svg>
                                                    <span><?= $p->benefit2?></span>
                                                </li>
                                                <li class="flex items-center space-x-3">
                                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                    </svg>
                                                    <span><?= $p->benefit3?></span>
                                                </li>
                                            </ul>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                            </div>

                                        </div>
                                        <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                            <div class="flex items-center text-center mx-auto ">
                                                <input id="checkbox1" type="checkbox" value="" name="checkboxes[]" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox1" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                </div>
                                
                            </div>
                            <?php endforeach?>
                            <!-- Package 2 -->

                        </div>
                    </div>
                </div>

            </div>


            <!-- Opional Packages -->
            <div class="flex flex-col md:flex-row gap-5 md:mt-0 mt-20">
                <div class="bg-white md:p-10 rounded-xl md:mt-10 flex-[60%]">
                    <h1 class="font-bold mb-10 md:text-3xl text-xl text-center ">Optional Tour</h1>
                    <h2 class="text-2xl font-semibold md:ml-10 mb-4"></h2>

                    <!-- FullDayTour -->
                    <?php $optionkey = 1 ?>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="<?=$optionkey; ?>" data-collapse-toggle="option<?=$optionkey; ?>">
                        <span class="flex-1 ml-3 text-left text-xl md:text-xl font-semibold whitespace-nowrap">Fullday Tour</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    
                    <ul class="hidden py-2 space-y-2" id="option<?=$optionkey; $optionkey++  ?>">
                        <li class="flex items-center space-x-3">
                            <div class="container mx-auto md:p-8">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Package 1 -->
                                    <?php foreach($fullday as $full):?>
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <h2 class="text-xl font-semibold mb-4"><?= $full->name?></h2>
                                        <p class="font-semibold mb-4 ml-2">Start From MYR.<?= $full->startfrom?></p>

                                        <div class="flex gap-5 md:w-full mb-4">
                                            <a data-lightbox="image-2" href="./assets/img/slider1.jpg" class="md:w-[100%] md:max-w-[100%]" alt="">
                                                <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                                            </a>
                                        </div>
                                        <div class="hidden flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                                            <a data-lightbox="image-2" href="./assets/img/slider2.jpg" class="rounded-lg w-full h-[50%]   md:full object-cover" alt="">
                                                <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                                            </a>
                                            <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                                                <a data-lightbox="image-2" href="./assets/img/slider3.jpg">

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
                                        <div class="text-gray-600 mb-2">
                                            <div class="mb-6">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                                                <div class="flex flex-col md:flex-row gap-10 ">
                                                    <div class="flex flex-col w-full">
                                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Pax</h1>
                                                        <input type="number" min="2" id="optional" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="optional-description1" data-collapse-toggle="optional-description1">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                </svg>
                                                <span class="flex-1 ml-3 text-left whitespace-nowrap">Description</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <ul class="hidden py-2 space-y-2" id="optional-description1">
                                                <li class="flex items-center space-x-3">
                                                    <span><?php
                                                    $object = $this->Optionaldetail_model->getdeskripsi($full->id_package)[0]; // Accessing the first element of the array

                                                    // Convert the object into an associative array
                                                    $array = get_object_vars($object); 
                                                    echo $array['detail'];
                                                    
                                                    
                                                    ?></span>
                                                </li>
                                            </ul>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                            </div>



                                        </div>
                                        <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                            <div class="flex items-center text-center mx-auto ">
                                                <input id="optional1" type="checkbox" value="" name="checkboxes[]" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="optional1" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Dropdown menu -->
                    <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    </div>
                    <!-- endFullDayTour -->

                    <?php $optionkey = 10 ?>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="<?=$optionkey; ?>" data-collapse-toggle="option<?=$optionkey; ?>">
                        <span class="flex-1 ml-3 text-left text-xl md:text-xl font-semibold whitespace-nowrap">Halfday Tour</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    
                    <ul class="hidden py-2 space-y-2" id="option<?=$optionkey; $optionkey++  ?>">
                        <li class="flex items-center space-x-3">
                            <div class="container mx-auto md:p-8">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Package 1 -->
                                    <?php foreach($halfday as $full):?>
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <h2 class="text-xl font-semibold mb-4"><?= $full->name?></h2>
                                        <p class="font-semibold mb-4 ml-2">Start From MYR.<?= $full->startfrom?></p>

                                        <div class="flex gap-5 md:w-full mb-4">
                                            <a data-lightbox="image-2" href="./assets/img/slider1.jpg" class="md:w-[100%] md:max-w-[100%]" alt="">
                                                <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                                            </a>
                                        </div>
                                        <div class="hidden flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                                            <a data-lightbox="image-2" href="./assets/img/slider2.jpg" class="rounded-lg w-full h-[50%]   md:full object-cover" alt="">
                                                <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                                            </a>
                                            <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                                                <a data-lightbox="image-2" href="./assets/img/slider3.jpg">

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
                                        <div class="text-gray-600 mb-2">
                                            <div class="mb-6">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                                                <div class="flex flex-col md:flex-row gap-10 ">
                                                    <div class="flex flex-col w-full">
                                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Pax</h1>
                                                        <input type="number" min="2" id="optional" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="optional-description1" data-collapse-toggle="optional-description1">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                </svg>
                                                <span class="flex-1 ml-3 text-left whitespace-nowrap">Description</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <ul class="hidden py-2 space-y-2" id="optional-description1">
                                                <li class="flex items-center space-x-3">
                                                    <span><?= $this->Optionaldetail_model->getdeskripsi($full->id_package)->deskripsi?></span>
                                                </li>
                                            </ul>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                            </div>



                                        </div>
                                        <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                            <div class="flex items-center text-center mx-auto ">
                                                <input id="optional1" type="checkbox" value="" name="checkboxes[]" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="optional1" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Dropdown menu -->
                    <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    </div>

                    <?php $optionkey = 20 ?>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="<?=$optionkey; ?>" data-collapse-toggle="option<?=$optionkey; ?>">
                        <span class="flex-1 ml-3 text-left text-xl md:text-xl font-semibold whitespace-nowrap">Transfer</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    
                    <ul class="hidden py-2 space-y-2" id="option<?=$optionkey; $optionkey++  ?>">
                        <li class="flex items-center space-x-3">
                            <div class="container mx-auto md:p-8">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Package 1 -->
                                    <?php foreach($transfer as $full):?>
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <h2 class="text-xl font-semibold mb-4"><?= $full->name?></h2>
                                        <p class="font-semibold mb-4 ml-2">Start From MYR.<?= $full->startfrom?></p>

                                        <div class="flex gap-5 md:w-full mb-4">
                                            <a data-lightbox="image-2" href="./assets/img/slider1.jpg" class="md:w-[100%] md:max-w-[100%]" alt="">
                                                <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                                            </a>
                                        </div>
                                        <div class="hidden flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                                            <a data-lightbox="image-2" href="./assets/img/slider2.jpg" class="rounded-lg w-full h-[50%]   md:full object-cover" alt="">
                                                <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                                            </a>
                                            <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                                                <a data-lightbox="image-2" href="./assets/img/slider3.jpg">

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
                                        <div class="text-gray-600 mb-2">
                                            <div class="mb-6">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                                                <div class="flex flex-col md:flex-row gap-10 ">
                                                    <div class="flex flex-col w-full">
                                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Pax</h1>
                                                        <input type="number" min="2" id="optional" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="optional-description1" data-collapse-toggle="optional-description1">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                </svg>
                                                <span class="flex-1 ml-3 text-left whitespace-nowrap">Description</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <ul class="hidden py-2 space-y-2" id="optional-description1">
                                                <li class="flex items-center space-x-3">
                                                    <span><?= $this->Optionaldetail_model->getdeskripsi($full->id_package)->deskripsi?></span>
                                                </li>
                                            </ul>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                            </div>



                                        </div>
                                        <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                            <div class="flex items-center text-center mx-auto ">
                                                <input id="optional1" type="checkbox" value="" name="checkboxes[]" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="optional1" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Dropdown menu -->
                    <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    </div>

                    <?php $optionkey = 30 ?>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="<?=$optionkey; ?>" data-collapse-toggle="option<?=$optionkey; ?>">
                        <span class="flex-1 ml-3 text-left text-xl md:text-xl font-semibold whitespace-nowrap">Charter</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    
                    <ul class="hidden py-2 space-y-2" id="option<?=$optionkey; $optionkey++  ?>">
                        <li class="flex items-center space-x-3">
                            <div class="container mx-auto md:p-8">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <!-- Package 1 -->
                                    <?php foreach($charter as $full):?>
                                    <div class="bg-white p-6 rounded-lg shadow-md">
                                        <h2 class="text-xl font-semibold mb-4"><?= $full->name?></h2>
                                        <p class="font-semibold mb-4 ml-2">Start From MYR.<?= $full->startfrom?></p>

                                        <div class="flex gap-5 md:w-full mb-4">
                                            <a data-lightbox="image-2" href="./assets/img/slider1.jpg" class="md:w-[100%] md:max-w-[100%]" alt="">
                                                <img src="./assets/img/slider1.jpg" class="rounded-lg w-full h-full object-cover" alt="">
                                            </a>
                                        </div>
                                        <div class="hidden flex flex-row md:flex-col gap-5  md:w-[45%] w-full align-center">
                                            <a data-lightbox="image-2" href="./assets/img/slider2.jpg" class="rounded-lg w-full h-[50%]   md:full object-cover" alt="">
                                                <img src="./assets/img/slider2.jpg" class="rounded-lg w-full  md:h-full object-cover" alt="">
                                            </a>
                                            <div class="object-cover w-full overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group">
                                                <a data-lightbox="image-2" href="./assets/img/slider3.jpg">

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
                                        <div class="text-gray-600 mb-2">
                                            <div class="mb-6">
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Person</label>
                                                <div class="flex flex-col md:flex-row gap-10 ">
                                                    <div class="flex flex-col w-full">
                                                        <h1 class=" text-sm font-thin mr-4 mb-2 ">Pax</h1>
                                                        <input type="number" min="2" id="optional" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="optional-description1" data-collapse-toggle="optional-description1">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                                </svg>
                                                <span class="flex-1 ml-3 text-left whitespace-nowrap">Description</span>
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <ul class="hidden py-2 space-y-2" id="optional-description1">
                                                <li class="flex items-center space-x-3">
                                                    <span><?= $this->Optionaldetail_model->getdeskripsi($full->id_package)->deskripsi?></span>
                                                </li>
                                            </ul>
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">

                                            </div>



                                        </div>
                                        <div class="bg-blue-500 text-white  py-2 px-4 rounded-full">
                                            <div class="flex items-center text-center mx-auto ">
                                                <input id="optional1" type="checkbox" value="" name="checkboxes[]" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="optional1" class="ml-2 w-full text-sm font-medium text-white dark:text-gray-300">Choose This Hotel</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Dropdown menu -->
                    <div id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    </div>


                </div>
            </div>
            
            <div class="flex">
            <section>
        <div class="bg-gray-100 h-screen flex ">
            <div class="w-[70%] bg-white mx-auto p-10 rounded-lg shadow-md  justify-center align-center self-center ">
             
                    <h1 class="text-xl mb-10 font-semibold">Form Guest</h1>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="address" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="zipcode" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Zip Code</label>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6" style="align-items: self-end;">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                            <select id="countries" name="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="MY">Malaysia</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="state" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">State</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="mobilenumber" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number </label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="email" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                    </div>
            </div>
            </section>

                <button type="submit" class="w-full md:w-1/2 mx-auto justify-center align-center text-center self-center mt-12 text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Book</button>
            </div>
        </section>
    </form>
   




    <?php $this->load->view('users/_partials/footer.php')?>
    
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
    <script>
        tailwind.config = {
          darkMode: 'class',
        }
      </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/datepicker.min.js"></script>
    <!-- <script src="./scripts/dateRange.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="./scripts/input.js"></script>
    <script src="./scripts/index.js"></script>
</body>

</html>