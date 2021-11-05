<?php
    require("dbFiles/customers.php");
    $customers = new customers();
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

    <title>Customers</title>
</head>
<body>
    <div class="content-area flex flex-row mx-10 justify-between">
        <div class="p-4 w-full">
            <div class="bg-gray-300 text-black w-full p-4 text-center">
                <h1 class="text-2xl">
                    Customers
                </h1>
            </div>
            <div class="bg-gray-100 text-black w-full p-2 flex flex-row flex-wrap justify-between">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>
                                Customer Id
                            </th>
                            <th>
                                First name
                            </th>
                            <th>
                                Last name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="w-full text-center">
                        <?php foreach($customers->fetchAll() as $customer): ?>
                        <tr class="w-full my-2">
                            <td>
                                <?php echo $customer["buyerId"];?>
                            </td>
                            <td>
                                <?php echo $customer["fName"];?>
                            </td>
                            <td>
                                <?php echo $customer["lname"];?>
                            </td>
                            <td>
                                <?php echo $customer["email"];?>
                            </td>
                            <td>
                                <?php echo $customer["address"];?>
                            </td>
                            <td>
                                <div class="flex flex-row text-center justify-evenly">
                                    <div>
                                        <a href="delete.php?buyerId=<?php echo$customer["buyerId"];?>" class="text-red-700">Delete</a>
                                    </div>
                                    <div>
                                        <a href="update.php?buyerId=<?php echo$customer["buyerId"];?>" class="text-green-600">Update</a>
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
<script src="script/main.js"></script>
</html>