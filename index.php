<?php
    session_start();
    if(isset($_SESSION['adminId'])){
        unset($_SESSION['adminId']);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="media/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="media/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="media/icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Fast Food</title>
</head>
<body>
    <div class="nav-container">
        <div class="nav w-full">
            <div class="brand">
                <div>
                    <img src="media/images/FAlogo.png" class="logo" alt="Logo">
                </div>
                <div>
                    <h1 class="text-white">
                        Fast Foods
                    </h1>
                </div>
            </div>
            <div class="link-container">
                <a href="index.php" class="link">Home</a>
            </div>
            <div class="link-container">
                <a href="menu.php" class="link">Menu</a>
            </div>
            <div class="link-container">
                <a href="aboutus.php" class="link">About Us</a>
            </div>
            <?php if(!isset($_SESSION["userId"])) :?>
                <div class="link-container">
                    <a href="login.php" class="link">Login</a>
                </div>
            <?php endif; ?>
            <div class="nav-cta">
                <button class="btn btn-cta">
                    Order
                </button>
            </div>
            <?php if(isset($_SESSION["userId"])) :?>
                <div class="relative">
                    <div class="flex flex-row">
                        <div class="flex flex-row justify-evenly items-center cursor-pointer nav-user-icon">
                            <div>
                                <img src="media/images/cavillSQ.webp" alt="" class="rounded-full w-10">
                            </div>
                            <div class="flex ">
                                <span class="p-2 text-white">
                                    <?php echo $_SESSION["fname"]; ?>
                                </span>
                            </div>
                        </div>
                        <a href="cart.php">
                                <div class="relative">
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="widget text-white w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <div class="badge-container absolute top-0 right-0">
                                        <span class="p-1 rounded bg-white">
                                            <?php echo $_SESSION['cart-number']?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                    </div>
                    <div class="flex flex-col absolute bg-white justify-between w-28 text-center mt-1 hidden nav-user-tools">
                        <div class="my-2">
                            <span>
                                <a href="account.php">
                                    Account
                                </a>
                            </span>
                        </div>
                        <hr>
                        <div class="my-2">
                            <span>
                                <a href="history.php">
                                    History
                                </a>
                            </span>
                        </div>
                        <hr>
                        <div class="my-2">
                            <span>
                                <a href="">
                                    Report
                                </a>
                            </span>
                        </div>
                        <hr>
                        <div class="my-2">
                            <span>
                                <a href="logout.php">
                                    Logout
                                </a>
                            </span>
                        </div>
                        <hr>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="main">
        <div class="fold">
            <img src="media/images/burger1.jpg" class="fold-img" alt="">
            <div class="fold-content">
                <h1 class="fold-heading">
                    Snack of The Day
                </h1>
                <small>
                    <p class="fold-content-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste qui suscipit expedita ex ipsum natus tempora quo quis fugiat delectus impedit atque debitis, reiciendis unde magni corrupti dolores sunt! Mollitia!
                    </p>
                </small>
            </div>
        </div>
        <div class="relative">
            <div class="shape-top">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <div class="main-body w-full px-20">
            <div class="offers">
                <h2 class="text-6xl text-center p-4">
                    Offers
                </h2>
                <div class="offers-body container mx-auto justify-center flex-row flex-wrap w-full">
                    <div class="food-card">
                        <div class="card-img-container">
                            <img src="media/images/top-view-burgers-fries-with-pickles-copy-space.jpg" class="card-img" alt="">
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="cd-body-header">
                                <div>
                                    <h3 class="text-3xl">
                                        Fries and Burgers
                                    </h3>
                                </div>
                                <div>
                                    <span class="text-xl">
                                        Ksh.700
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="cd-body-content">
                                <small>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reiciendis a! Quasi ipsum ratione, alias at repudiandae doloribus eveniet, corrupti ad aperiam est quis fuga iste, a nesciunt corporis natus!
                                    </p>
                                </small>
                            </div>
                            <br>
                            <div class="cd-body-footer items-center flex flex-row justify-between">
                                <div class="rating">
                                    <div class="flex flex-row">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <button class="btn btn-buy bg-red-700 text-white m-2 w-32">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card w-96">
                        <div class="card-img-container">
                            <img src="media/images/top-view-burgers-fries-with-pickles-copy-space.jpg" class="card-img" alt="">
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="cd-body-header">
                                <div>
                                    <h3 class="text-3xl">
                                        Fries and Burgers
                                    </h3>
                                </div>
                                <div>
                                    <span class="text-xl">
                                        Ksh.700
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="cd-body-content">
                                <small>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reiciendis a! Quasi ipsum ratione, alias at repudiandae doloribus eveniet, corrupti ad aperiam est quis fuga iste, a nesciunt corporis natus!
                                    </p>
                                </small>
                            </div>
                            <br>
                            <div class="cd-body-footer items-center flex flex-row justify-between">
                                <div class="rating">
                                    <div class="flex flex-row">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <button class="btn btn-buy bg-red-700 text-white m-2 w-32">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card w-96">
                        <div class="card-img-container">
                            <img src="media/images/top-view-burgers-fries-with-pickles-copy-space.jpg" class="card-img" alt="">
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="cd-body-header">
                                <div>
                                    <h3 class="text-3xl">
                                        Fries and Burgers
                                    </h3>
                                </div>
                                <div>
                                    <span class="text-xl">
                                        Ksh.700
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="cd-body-content">
                                <small>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reiciendis a! Quasi ipsum ratione, alias at repudiandae doloribus eveniet, corrupti ad aperiam est quis fuga iste, a nesciunt corporis natus!
                                    </p>
                                </small>
                            </div>
                            <br>
                            <div class="cd-body-footer items-center flex flex-row justify-between">
                                <div class="rating">
                                    <div class="flex flex-row">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <button class="btn btn-buy bg-red-700 text-white m-2 w-32">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card w-96">
                        <div class="card-img-container">
                            <img src="media/images/top-view-burgers-fries-with-pickles-copy-space.jpg" class="card-img" alt="">
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="cd-body-header">
                                <div>
                                    <h3 class="text-3xl">
                                        Fries and Burgers
                                    </h3>
                                </div>
                                <div>
                                    <span class="text-xl">
                                        Ksh.700
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="cd-body-content">
                                <small>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reiciendis a! Quasi ipsum ratione, alias at repudiandae doloribus eveniet, corrupti ad aperiam est quis fuga iste, a nesciunt corporis natus!
                                    </p>
                                </small>
                            </div>
                            <br>
                            <div class="cd-body-footer items-center flex flex-row justify-between">
                                <div class="rating">
                                    <div class="flex flex-row">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <button class="btn btn-buy bg-red-700 text-white m-2 w-32">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card w-96">
                        <div class="card-img-container">
                            <img src="media/images/top-view-burgers-fries-with-pickles-copy-space.jpg" class="card-img" alt="">
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="cd-body-header">
                                <div>
                                    <h3 class="text-3xl">
                                        Fries and Burgers
                                    </h3>
                                </div>
                                <div>
                                    <span class="text-xl">
                                        Ksh.700
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="cd-body-content">
                                <small>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reiciendis a! Quasi ipsum ratione, alias at repudiandae doloribus eveniet, corrupti ad aperiam est quis fuga iste, a nesciunt corporis natus!
                                    </p>
                                </small>
                            </div>
                            <br>
                            <div class="cd-body-footer items-center flex flex-row justify-between">
                                <div class="rating">
                                    <div class="flex flex-row">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <button class="btn btn-buy bg-red-700 text-white m-2 w-32">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food-card w-96">
                        <div class="card-img-container">
                            <img src="media/images/top-view-burgers-fries-with-pickles-copy-space.jpg" class="card-img" alt="">
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="cd-body-header">
                                <div>
                                    <h3 class="text-3xl">
                                        Fries and Burgers
                                    </h3>
                                </div>
                                <div>
                                    <span class="text-xl">
                                        Ksh.700
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="cd-body-content">
                                <small>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reiciendis a! Quasi ipsum ratione, alias at repudiandae doloribus eveniet, corrupti ad aperiam est quis fuga iste, a nesciunt corporis natus!
                                    </p>
                                </small>
                            </div>
                            <br>
                            <div class="cd-body-footer items-center flex flex-row justify-between">
                                <div class="rating">
                                    <div class="flex flex-row">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star checked" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="card-widget card-star" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <button class="btn btn-buy bg-red-700 text-white m-2 w-32">
                                        Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="testimonials w-full text-center p-20">
                <h2 class="text-5xl">
                    Fast Customers.
                </h2>
                <div class="flex flex-row w-full">
                    <div class="w-4/12">
                        <h2 class="text-2xl bold text-center">
                            Delivery
                        </h2>
                        <div class="w-full">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora error voluptatum voluptate ex. Modi, a reiciendis tenetur corrupti, similique numquam nesciunt totam culpa quod cupiditate accusantium quo quis et assumenda!
                            </p>
                        </div>
                    </div>
                    <div class="w-4/12">
                        <h2 class="text-2xl mt-10 bold text-center">
                            Our Food
                        </h2>
                        <div class="w-full">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora error voluptatum voluptate ex. Modi, a reiciendis tenetur corrupti, similique numquam nesciunt totam culpa quod cupiditate accusantium quo quis et assumenda!
                            </p>
                        </div>
                    </div>
                    <div class="w-4/12">
                        <h2 class="text-2xl bold text-center">
                            Our Services
                        </h2>
                        <div class="w-full">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora error voluptatum voluptate ex. Modi, a reiciendis tenetur corrupti, similique numquam nesciunt totam culpa quod cupiditate accusantium quo quis et assumenda!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center relative">
                <div>
                    <h2 class="text-6xl text-center">
                        Get our App
                    </h2>
                    <div class="app-section flex w-5/6 flex-row justify-end">
                        <div class="app-body w-8/12">
                            <div>
                                <h2 class="text-2xl text-center">
                                    The Fast Food App.
                                </h2>
                            </div>
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis cumque debitis commodi? Odit saepe provident quod perspiciatis necessitatibus non nemo dignissimos vel porro commodi. Odit a est assumenda unde tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestias reprehenderit nam suscipit cupiditate doloribus doloremque ut labore dolorum libero et, magni laborum temporibus voluptates, ipsa aut. Officiis, nulla velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quae hic, at maiores a explicabo facilis quibusdam impedit praesentium, perferendis, ab vel veritatis aspernatur nam ipsum numquam quasi excepturi dolorum?
                                </p>
                            </div>
                            <div class="flex justify-end p-6">
                                <img src="media/images/Mobile store logos combined.png" class="w-28 bw" alt="">
                            </div>
                        </div>
                        <div class="app-image-container w-auto">
                            <div class="app-image flex justify-center">
                                <img src="media/images/FAlogo.png" alt="">
                            </div>
                            <div class="app-store">
                                <small>
                                    All right<small class="text-white">s reserved. Fast Food<sup>©</sup> 2021.</small>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative mb-0">
        <div class="shape-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <footer>
        <div class="footer flex-row justify-between p-4 bg-black text-white text-center">
            <div class="service text-center flex-col">
                <img src="media/images/FAlogo.png" class="w-1/4 mx-auto" alt="">
                <h3 class="text-white">
                    Fast Foods
                </h3>
                <div>
                    <small class="text-xs">
                        All rights reserved. Fast Food<sup>©</sup> 2021.
                    </small>
                </div>
            </div>
            <div class="service text-center flex-col">
                <div>
                    <h2 class="text-4xl">
                        Customer Service
                    </h2>
                </div>
                <div>
                    <span>
                        <small>
                            Help-line:
                        </small>
                        <a href="" class="link">0727143069</a>
                    </span>
                </div>
                <div>
                    <span>
                        <small>
                            Email:
                        </small>
                        <a href="" class="link text-sm">help@line.com</a>
                    </span>
                </div>
            </div>
            <div class="service text-center flex-col">
                <div>
                    <h2 class="text-4xl">
                        Other Links
                    </h2>
                </div>
                <div class="link-container">
                    <span>
                        <a href="" class="link">
                            Report
                        </a>
                    </span>
                </div>
                <div class="link-container">
                    <span>
                        <a href="" class="link">
                            Request
                        </a>
                    </span>
                </div>
                <div class="link-container">
                    <span>
                        <a href="" class="link">
                            Join us
                        </a>
                    </span>
                </div>
            </div>
            <div class="socials">
                <div>
                    <h3 class="text-4xl">
                        Find us
                    </h3>
                </div>
                <div class="icons flex-row justify-between">
                    <div class="link-container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="widget bw" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 408.788 408.788" style="enable-background:new 0 0 408.788 408.788;" xml:space="preserve">
                        <path style="fill:#475993;" d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085  h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882  v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955  l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087  c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085  C408.786,24.662,384.124,0,353.701,0z"/>
                        </svg>
                    </div>
                    <div class="link-container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="widget bw" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 410.155 410.155" style="enable-background:new 0 0 410.155 410.155;" xml:space="preserve">
                            <path style="fill:#76A9EA;" d="M403.632,74.18c-9.113,4.041-18.573,7.229-28.28,9.537c10.696-10.164,18.738-22.877,23.275-37.067  l0,0c1.295-4.051-3.105-7.554-6.763-5.385l0,0c-13.504,8.01-28.05,14.019-43.235,17.862c-0.881,0.223-1.79,0.336-2.702,0.336  c-2.766,0-5.455-1.027-7.57-2.891c-16.156-14.239-36.935-22.081-58.508-22.081c-9.335,0-18.76,1.455-28.014,4.325  c-28.672,8.893-50.795,32.544-57.736,61.724c-2.604,10.945-3.309,21.9-2.097,32.56c0.139,1.225-0.44,2.08-0.797,2.481  c-0.627,0.703-1.516,1.106-2.439,1.106c-0.103,0-0.209-0.005-0.314-0.015c-62.762-5.831-119.358-36.068-159.363-85.14l0,0  c-2.04-2.503-5.952-2.196-7.578,0.593l0,0C13.677,65.565,9.537,80.937,9.537,96.579c0,23.972,9.631,46.563,26.36,63.032  c-7.035-1.668-13.844-4.295-20.169-7.808l0,0c-3.06-1.7-6.825,0.485-6.868,3.985l0,0c-0.438,35.612,20.412,67.3,51.646,81.569  c-0.629,0.015-1.258,0.022-1.888,0.022c-4.951,0-9.964-0.478-14.898-1.421l0,0c-3.446-0.658-6.341,2.611-5.271,5.952l0,0  c10.138,31.651,37.39,54.981,70.002,60.278c-27.066,18.169-58.585,27.753-91.39,27.753l-10.227-0.006  c-3.151,0-5.816,2.054-6.619,5.106c-0.791,3.006,0.666,6.177,3.353,7.74c36.966,21.513,79.131,32.883,121.955,32.883  c37.485,0,72.549-7.439,104.219-22.109c29.033-13.449,54.689-32.674,76.255-57.141c20.09-22.792,35.8-49.103,46.692-78.201  c10.383-27.737,15.871-57.333,15.871-85.589v-1.346c-0.001-4.537,2.051-8.806,5.631-11.712c13.585-11.03,25.415-24.014,35.16-38.591  l0,0C411.924,77.126,407.866,72.302,403.632,74.18L403.632,74.18z"/>
                            </svg>
                    </div>
                    <div class="link-container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="widget bw" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 551.034 551.034" style="enable-background:new 0 0 551.034 551.034;" xml:space="preserve">
                            <g>
                                
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                                    <stop offset="0" style="stop-color:#E09B3D"/>
                                    <stop offset="0.3" style="stop-color:#C74C4D"/>
                                    <stop offset="0.6" style="stop-color:#C21975"/>
                                    <stop offset="1" style="stop-color:#7024C4"/>
                                </linearGradient>
                                <path style="fill:url(#SVGID_1_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722   c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156   C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156   c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722   c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>
                                
                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517" y1="4.57" x2="275.517" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                                    <stop offset="0" style="stop-color:#E09B3D"/>
                                    <stop offset="0.3" style="stop-color:#C74C4D"/>
                                    <stop offset="0.6" style="stop-color:#C21975"/>
                                    <stop offset="1" style="stop-color:#7024C4"/>
                                </linearGradient>
                                <path style="fill:url(#SVGID_2_);" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517   S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083   s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z"/>
                                
                                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31" y1="4.57" x2="418.31" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)">
                                    <stop offset="0" style="stop-color:#E09B3D"/>
                                    <stop offset="0.3" style="stop-color:#C74C4D"/>
                                    <stop offset="0.6" style="stop-color:#C21975"/>
                                    <stop offset="1" style="stop-color:#7024C4"/>
                                </linearGradient>
                                <circle style="fill:url(#SVGID_3_);" cx="418.31" cy="134.07" r="34.15"/>
                            </svg>
                    </div>
                </div>
            </div>
            <div class="feedback text-center">
                <div>
                    <h3 class="text-4xl">
                        Leave us a message
                    </h3>
                </div>
                <div class="pt-2">
                    <form action="">
                        <div>
                            <textarea name="feedback" id="feedback" class="w-full">

                            </textarea>
                        </div>
                        <div>
                            <button class="btn btn-red text-white w-11/12 my-2">
                                Feedback
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="scripts/main.js"></script>
</html>