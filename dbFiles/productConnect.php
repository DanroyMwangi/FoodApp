<?php
    require_once("dbConnect.php");


    if(isset($_POST['addProductBtn'])){
        $productImg = $_FILES['productImage'];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productCategory = json_encode($_POST['productCategory']);
        $productOffer = $_POST['productOffers'];
        $productDiscount = $_POST['productDiscount'];
        $productRating = $_POST['productRating'];
        $productDescription = $_POST['productDescription'];
        $adminID = $_SESSION['adminId'];

        (new product(new db()))->insertProduct($productImg,$productName,$productPrice,$productCategory,$productOffer,$productDiscount,$productRating,$productDescription,$adminID);
    }
    if(isset($_POST['productDeleteBtn'])){
        $productId = $_POST['productId'];

        (new product(new db()))->delete($productId);
    }
    class product{
        private $conn;
        private $productImg,$productName,$productPrice,$productCategory,$productOffer,$productDiscount,$productRating,$productDescription,$adminID;
        function __construct($db)
        {
            $this->conn = $db->connect();
        }
        function insertProduct($productImg,$productName,$productPrice,$productCategory,$productOffer,$productDiscount,$productRating,$productDescription,$adminID){
                $this->productImg = $productImg;
                $this->productName = $productName;
                $this->productPrice = $productPrice;
                $this->productCategory = json_encode($productCategory);
                $this->productOffer = $productOffer;
                $this->productDiscount = $productDiscount;
                $this->productRating = $productRating;
                $this->productDescription = $productDescription;
                $this->adminID = $_SESSION['adminId'];
                $name = $this->productImg['name'];
    
                $temp = (explode(".", $this->productImg['name']));
                $imageExtension = end($temp);
                $this->productImg['name']=$this->productName.".".$imageExtension;
                $uploadPath = "assets/products/";
                $imageTemp = $productImg['tmp_name'];
                $name = $this->productImg['name'];
                move_uploaded_file($productImg['tmp_name'], "$uploadPath"."$name");  
    
                $sql = "INSERT INTO `product`(`adminId`, `name`, `category`, `price`, `image`, `description`, `rating`, `discount`, `offer`) VALUES ('$this->adminID','$this->productName','$this->productCategory',$this->productPrice,'$name','$this->productDescription',$this->productRating,$this->productDiscount,'$this->productOffer')";
                $result = mysqli_query($this->conn,$sql);
                if($result == 1){
                    $_SESSION['message'] = "Successfully added product";
                    echo $this->conn->error;
                }
                else{
                    $_SESSION['message'] = $this->conn->error;
                    echo $this->conn->error;
                }
                header("location:admin-dash.php");
        }
        function fetchAll(){
            $sql = "SELECT `productId`, `uname`, `name`, `category`, `price`, `image`, `description`, `rating`, `discount`, `offer`, `dateAdded` FROM `product`AS p INNER JOIN `admin` AS a ON p.adminId = a.adminId ";
        
            $result = mysqli_query($this->conn,$sql);
            if($result->num_rows>0){
                return $result;
            }
        }
        function fectchOne($productId){
            $sql = "SELECT * FROM `product` WHERE `productId` = $productId;";
        
            $result = mysqli_query($this->conn,$sql);
            if($result->num_rows==1){
                return $result;
            }
        }
        function fetchHistory($userId){
            $sql = "SELECT b.fname, b.lname, `items`, `total`, `orderDate`, `status`, `payment`, o.address, `vehicle` FROM `order` AS o INNER JOIN `buyer` AS b ON o.buyerId = b.buyerId INNER JOIN `deliverer` AS d ON d.delivererId = o.delivererId WHERE b.buyerId = $userId";
        
            $result = mysqli_query($this->conn,$sql);
            if($result->num_rows>0){
                return $result;
            }
            else{
                return null;
            }
        }
        function fetchAllHistory(){
            $sql = "SELECT b.fname, b.lname, `items`, `total`, `orderDate`, `status`, `payment`, o.address, `vehicle` FROM `order` AS o INNER JOIN `buyer` AS b ON o.buyerId = b.buyerId INNER JOIN `deliverer` AS d ON d.delivererId = o.delivererId";
        
            $result = mysqli_query($this->conn,$sql);
            if($result->num_rows>0){
                return $result;
            }
            else{
                return null;
            }
        }
        function delete($productId){
            $sql = "DELETE FROM `product` WHERE `productId` = $productId";
        
            $result = mysqli_query($this->conn,$sql);
            if($result==1){
                $_SESSION['message'] = "Successfully removed the product.";
                header("location:../admin-dash.php");
            }
        }
    }
?>