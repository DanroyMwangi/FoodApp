<?php
    require("dbFiles/customers.php");

    $customers = new customers(new db());
    if(isset($_POST['deleteBtn'])){
        $buyerId = $_POST['buyerId'];

        $customers->delete($buyerId);
        header("location:admin-dash.php");
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
            <div>
                <span>
                    Are you sure you want to delete the user account?
                </span>
            </div>
            <button type="submit" name="deleteBtn">
                Delete
            </button>
        </div>
    </form>
</body>
<script src="script/main.js"></script>
</html>