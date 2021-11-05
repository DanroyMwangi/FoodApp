<?php
    require("dbFiles/customers.php");
    $customers = new customers();
    if(isset($_POST['updateBtn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $buyerId = $_POST['buyerId'];

        $customers->update($buyerId,$fname,$lname,$email,$address);
    }
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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="bg-gray-200 p-2">
        <input type="hidden" name="buyerId" value="<?php echo $_REQUEST['buyerId']?>">
        <div class="form-group flex flex-row m-2">
            <div class="w-1/3">
                <label for="fname">
                    First Name
                </label>
            </div>
            <div class="w-2/3">
                <input type="text" name="fname" id="fname">
            </div>
        </div>
        <div class="form-group flex flex-row m-2">
            <div class="w-1/3">
                <label for="lname">
                    Last Name
                </label>
            </div>
            <div class="w-2/3">
                <input type="text" name="lname" id="lname">
            </div>
        </div>
        <div class="form-group flex flex-row m-2">
            <div class="w-1/3">
                <label for="email">
                    Email
                </label>
            </div>
            <div class="w-2/3">
                <input type="text" name="email" id="email">
            </div>
        </div>
        <div class="form-group flex flex-row m-2">
            <div class="w-1/3">
                <label for="address">
                    Address
                </label>
            </div>
            <div class="w-2/3">
                <input type="text" name="address" id="address">
            </div>
        </div>
        <div>
            <button type="submit" name="updateBtn">
                Update
            </button>
        </div>
    </form>
</body>
<script src="script/main.js"></script>
</html>