<?php
    session_start();
    if(isset($_SESSION['adminId'])){
        unset($_SESSION['adminId']);
    }
    require_once("dbFiles/productConnect.php");
    require_once("dbFiles /dbConnect.php");
    $db = new db();
    $products = new product($db);
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
        <div class="nav w-full bg-black">
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
    <div class="mt-28">
        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Deliverer
                                    </th>
                                    <th>
                                        Order Date
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="w-full text-center">
                                <?php if($products->fetchHistory($_SESSION['userId']) != null):?>
                                <?php foreach($products->fetchHistory($_SESSION['userId']) as $product): ?>
                                    <?php $allItems = json_decode($product["items"],true);?>
                                        <?php foreach($allItems as $item): ?>
                                            <?php foreach($products->fectchOne($item['id']) as $historyItem): ?>
                                                <tr>
                                                    <td class="w-1/12">
                                                        <div title="<?php echo $product["image"];?>">
                                                            <img src="assets/products/<?php echo $historyItem["image"];?>" class="w-full" alt="">
                                                        </div>
                                                    </td>
                                                    <td class="text-gray-300">
                                                        <?php echo $historyItem["name"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $product["total"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $product["status"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $product["address"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $product["vehicle"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $product["orderDate"];?>
                                                    </td>
                                                    <td>
                                                        <form method="POST" action="dbFiles/productConnect.php">
                                                            <input type="hidden" name="productId" value="<?php echo $product["productId"];?>">
                                                            <div class="flex flex-row text-center justify-evenly">
                                                                <div>
                                                                    <button type="submit" class="text-red-700" name="productDeleteBtn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"class="widget" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m424 64h-88v-16c0-26.467-21.533-48-48-48h-64c-26.467 0-48 21.533-48 48v16h-88c-22.056 0-40 17.944-40 40v56c0 8.836 7.164 16 16 16h8.744l13.823 290.283c1.221 25.636 22.281 45.717 47.945 45.717h242.976c25.665 0 46.725-20.081 47.945-45.717l13.823-290.283h8.744c8.836 0 16-7.164 16-16v-56c0-22.056-17.944-40-40-40zm-216-16c0-8.822 7.178-16 16-16h64c8.822 0 16 7.178 16 16v16h-96zm-128 56c0-4.411 3.589-8 8-8h336c4.411 0 8 3.589 8 8v40c-4.931 0-331.567 0-352 0zm313.469 360.761c-.407 8.545-7.427 15.239-15.981 15.239h-242.976c-8.555 0-15.575-6.694-15.981-15.239l-13.751-288.761h302.44z" fill="#eb0000" data-original="#000000"/><path d="m256 448c8.836 0 16-7.164 16-16v-208c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z" fill="#eb0000" data-original="#000000"/><path d="m336 448c8.836 0 16-7.164 16-16v-208c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z" fill="#eb0000" data-original="#000000"/><path d="m176 448c8.836 0 16-7.164 16-16v-208c0-8.836-7.164-16-16-16s-16 7.164-16 16v208c0 8.836 7.163 16 16 16z" fill="#eb0000" data-original="#000000"/></g></g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="submit" class="text-green-700" name="productUpdateBtn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" class="widget" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                                                                <g><path xmlns="http://www.w3.org/2000/svg" d="m61.496094 279.609375c-.988282-8.234375-1.496094-16.414063-1.496094-23.609375 0-107.402344 88.597656-196 196-196 50.097656 0 97 20.199219 131.5 51.699219l-17.300781 17.601562c-3.898438 3.898438-5.398438 9.597657-3.898438 15 1.800781 5.097657 6 9 11.398438 10.199219 3.019531.605469 102.214843 32.570312 95.898437 31.300781 8.035156 2.675781 19.917969-5.894531 17.703125-17.699219-.609375-3.023437-22.570312-113.214843-21.300781-106.902343-1.199219-5.398438-5.101562-9.898438-10.5-11.398438-5.097656-1.5-10.800781 0-14.699219 3.898438l-14.699219 14.398437c-45.300781-42.296875-107.503906-68.097656-174.101562-68.097656-140.699219 0-256 115.300781-256 256v.597656c0 8.457032.386719 14.992188.835938 19.992188.597656 6.625 5.480468 12.050781 12.003906 13.359375l30.816406 6.160156c10.03125 2.007813 19.050781-6.402344 17.839844-16.5zm0 0" fill="#10cf00" data-original="#000000"/><path xmlns="http://www.w3.org/2000/svg" d="m499.25 222.027344-30.90625-6.296875c-10.042969-2.046875-19.125 6.371093-17.890625 16.515625 1.070313 8.753906 1.546875 17.265625 1.546875 23.753906 0 107.398438-88.597656 196-196 196-50.097656 0-97-20.199219-131.5-52l17.300781-17.300781c3.898438-3.898438 5.398438-9.597657 3.898438-15-1.800781-5.101563-6-9-11.398438-10.199219-3.019531-.609375-102.214843-32.570312-95.898437-31.300781-5.101563-.898438-10.203125.601562-13.5 4.199219-3.601563 3.300781-5.101563 8.699218-4.203125 13.5.609375 3.019531 22.574219 112.210937 21.304687 105.898437 1.195313 5.402344 5.097656 9.902344 10.496094 11.398437 6.261719 1.570313 11.488281-.328124 14.699219-3.898437l14.402343-14.398437c45.296876 42.300781 107.5 69.101562 174.398438 69.101562 140.699219 0 256-115.300781 256-256v-.902344c0-6.648437-.242188-13.175781-.796875-19.664062-.570313-6.628906-5.433594-12.074219-11.953125-13.40625zm0 0" fill="#10cf00" data-original="#000000"/></g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
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