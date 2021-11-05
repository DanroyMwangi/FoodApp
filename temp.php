<?php
$username = "Ndung'u";
$password = "mwangidanroyndungu";
$server = "localhost";
$db = "employees";

$db = mysqli_connect($server,$username,$password,$db);
echo "<head><link rel=\"nofollow\" href=''></head>";
$results_per_page = 5;

// find out the number of results stored in database
$sql="SELECT * FROM `dept_manager`";
$result = mysqli_query($db, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = (int)$_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

$result = mysqli_query($db, $sql);

// retrieve selected results from database and display them on page 
$sql = "SELECT `dept_no`, `emp_no`, `from_date`, `to_date` FROM `dept_manager` limit $this_page_first_result,$results_per_page";

$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)) {
    echo '<center><table>
    <tr><td>'.$row['dept_no'].'</td><td>'.$row['emp_no'].'</td><td>'.$row['from_date'].'</td><td>'.$row['to_date'].'</td></tr>
    </table></center>';
}
mysqli_free_result($result);   

// display the links to the pages
for ($page=1; $page<=$number_of_pages;$page++) { 
        echo "<a href='temp.php?page=$page'>$page</a>";
        echo "&nbsp"; 
        }
?>