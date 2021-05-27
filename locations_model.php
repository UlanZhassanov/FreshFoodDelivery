
<?php
require("config.php");

// Gets data from URL parameters.
if(isset($_GET['add_location'])) 
{

    add_location();
}
if(isset($_GET['confirm_location'])) 
{


    confirm_location();
}



function add_location(){
    $con=mysqli_connect ("localhost", 'root', '','foodsys');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    $description =$_GET['description'];
    $query= sprintf("select custid from purchase_detail order by modified_on desc limit 1");
    $result= mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    $id=$row['custid'];
   
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO locations " .
        " (id, lat, lng, description, custid) " .
        " VALUES (NULL, '%s', '%s', '%s', $id);",
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng),
        mysqli_real_escape_string($con,$description)   );

    $result = mysqli_query($con,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function confirm_location()
{
    $con=mysqli_connect ("localhost", 'root', '','foodsys');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $id =$_GET['id'];
    $confirmed =$_GET['confirmed'];

    $query= sprintf("select id from registerstaff order by modified_on desc limit 1");
    $result= mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);
    $staffid=$row['id'];
    // $staffid=$_SESSION['id'];
   
    // Inserts new row with place data.

    // update location with confirm if admin confirm.
    $query = "update locations set location_status = $confirmed, staffid=$staffid WHERE id = $id ";
    $result = mysqli_query($con,$query);
    echo "Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function get_confirmed_locations(){
    $con=mysqli_connect ("localhost", 'root', '','foodsys');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id ,lat,lng,description,location_status as isconfirmed
from locations WHERE  location_status = 1
  ");

    $rows = array();

    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }

    $indexed = array_map('array_values', $rows);
    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function get_all_locations(){
    $con=mysqli_connect ("localhost", 'root', '','foodsys');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.

    $sqldata = "
select id ,lat,lng,description,location_status as isconfirmed
from locations where location_status=0
  ";

$query=mysqli_query($con,$sqldata);
    $rows = array();
    while($r = mysqli_fetch_assoc($query)) {
        $rows[] = $r;

    }
  $indexed = array_map('array_values', $rows);
  //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}

?>