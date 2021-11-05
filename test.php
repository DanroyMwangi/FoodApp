<?php
$username = "Ndung'u";
$password = "mwangidanroyndungu";
$server = "localhost";
$db = "employees";

$conn = mysqli_connect($server,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlResults = $conn->query("SELECT * FROM `employees`");
$numrows = $sqlResults->num_rows;
$limit=20;

$offset;
// next determine if offset has been passed to script, if not use 0
if (empty($offset)) {
    $offset=1;
}

// get results
$result=$conn->query("SELECT `emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date` FROM `employees` limit $offset,$limit");


// now you can display the results returned
while ($data = $result->fetch_assoc()) {
    // code to display results
echo '<center><table>
<tr><td>'.$data['emp_no'].'</td><td>'.$data['birth_date'].'</td><td>'.$data['first_name'].'</td><td>'.$data['last_name'].'</td><td>'.$data['gender'].'</td><td>'.$data['hire_date'].'</td></tr>
</table></center>';
}

// next we need to do the links to other results

if ($offset==1) { // bypass PREV link if offset is 0
    $prevoffset=$offset-20;
    $current = $_SERVER['PHP_SELF'];
    echo "<a href=\"$current?offset=$prevoffset\">PREV</a> &nbsp; \n";
}

// calculate number of pages needing links
$pages=intval($numrows/$limit);

// $pages now contains int of pages needed unless there is a remainder from division
if ($numrows%$limit) {
    // has remainder so add one page
    $pages++;
}

for ($i=1;$i<=$pages;$i++) { // loop thru
    $newoffset=$limit*($i-1);
    $current = $_SERVER['PHP_SELF'];
    print "<a href=\"$current?offset=$newoffset\">$i</a> &nbsp; \n";
}

// check to see if last page
if (!(($offset/$limit)==$pages) && $pages!=1) {
    // not last page so give NEXT link
    $newoffset=$offset+$limit;
    $current = $_SERVER['PHP_SELF'];
    print "<a href=\"$current?offset=$newoffset\">NEXT</a><p>\n";
}

?>