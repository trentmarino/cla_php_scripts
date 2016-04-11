<?php
function getCategories(){
//include 'db_connect.php';
$url = parse_url(getenv("mysql://b9b98665377990:b375b17e@us-cdbr-iron-east-03.cleardb.net/heroku_0b5ab614720338a?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
$response = array();
    $sql = "SELECT * FROM property WHERE deleted = 0";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
             $response["product"] = array();
        while($row = $result->query($sql)) {
             $product = array();
             $product["idproperty"] = $row["idproperty"];
             $product["property_name"] = $row["property_name"];
             array_push($response["product"], $product);


            }
 print(json_encode($response));
 echo "string";
        }
        print(json_encode($response));
        echo "string";
        echo "string";

  $conn->close();
}
getCategories();
?>
