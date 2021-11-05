<?php
    session_start();
    if(isset($_SESSION['adminId'])){
        header('location:admin-dash.php');
    }
    else{
        if(isset($_SESSION['message'])){
            $message = $_SESSION['message'];
            echo "<script>alert('$message');</script>";
            unset($_SESSION['message']);
        }
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

    <title>Admin Login</title>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="p-4 bg-gray-800 rounded">
            <div class="text-center">
                <h2 class="text-white text-3xl mx-2 my-4">
                    Welcome to the Admin Login Page
                </h2>
            </div>
            <form action="dbFiles/adminConnect.php" method="post">
                <div class="form-group flex flex-row items-center m-2 justify-between">
                    <div class="mx-2 text-white">
                        <label for="adminUname">
                            Username
                        </label>
                    </div>
                    <div>
                        <input type="text" class="w-96 p-2 rounded border focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="adminUsername" id="adminUname" required>
                    </div>
                </div>
                <div class="form-group flex flex-row items-center m-2 justify-between">
                    <div class="mx-2 text-white">
                        <label for="adminPass">
                            Password
                        </label>
                    </div>
                    <div>
                        <input type="password" class="w-96 p-2 rounded border focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="adminPassword" id="adminPass" required>
                    </div>
                </div>
                <div class="form-group flex justify-center">
                    <button type="submit" class="p-2 bg-red-700 text-white w-1/4 rounded text-xl">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="scripts/main.js"></script>
</html>