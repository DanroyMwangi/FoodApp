<?php
require("dbFiles/productConnect.php");
require_once("dbFiles/dbConnect.php");
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

    <link rel="apple-touch-icon" sizes="180x180" href="media/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="media/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="media/icon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Test</title>
</head>
<body>
            <div class="content-area flex flex-row mx-10 justify-between">
                <div class="p-4 w-full">
                    <div class="bg-gray-300 text-black w-full p-4 text-center">
                        <h1 class="text-2xl">
                            Products
                        </h1>
                    </div>
                    <div class="bg-gray-100 text-black w-full p-2 flex flex-row flex-wrap justify-between">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Product Id
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Rating
                                    </th>
                                    <th>
                                        Discount
                                    </th>
                                    <th>
                                        Offer
                                    </th>
                                    <th>
                                        Added By
                                    </th>
                                    <th>
                                        Date Added
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="w-full text-center">
                                <?php foreach($products->fetchAll() as $product): ?>
                                    <!-- SELECT `productId`, `adminId`, `name`, `category`, `price`, `image`, `description`, `rating`, `discount`, `offer`, `dateAdded` -->
                                    <tr>
                                        <td class="w-1/12">
                                            <div>
                                                <img src="assets/products/<?php echo $product["image"];?>" class="w-full" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $product["productId"];?>
                                        </td>
                                        <td>
                                            <?php echo $product["name"];?>
                                        </td>
                                        <td>
                                            <?php echo json_decode($product["category"]);?>
                                        </td>
                                        <th>
                                            <?php echo $product["price"];?>
                                        </th>
                                        <td>
                                            <?php echo $product["description"];?>
                                        </td>
                                        <td>
                                            <?php echo $product["rating"];?>
                                        </td>
                                        <td>
                                            <?php echo $product["discount"];?>
                                        </td>
                                        <td>
                                            <?php echo $product["offer"];?>
                                        </td>
                                        <td>
                                            <?php echo $product["uname   "];?>
                                        </td>
                                        <td>
                                            <?php echo $product["dateAdded"];?>
                                        </td>
                                        <td>
                                            <div class="flex flex-row text-center justify-evenly">
                                                <div>
                                                    <a href="" class="text-red-700">Delete</a>
                                                </div>
                                                <div>
                                                    <a href="" class="text-green-600">Update</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>
<script src="scripts/main.js"></script>
</html>