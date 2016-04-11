<?php

include 'db_connect.php';

$response = array();
    $sql = "SELECT product.product_name , property.idproperty,product.idproduct
            FROM property
            INNER JOIN product
            ON property.idproperty=product.idproperty WHERE product.deleted = 0";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
             $response["product"] = array();
        while($row = $result->fetch_assoc()) {
             $product = array();
             $product["idproduct"] = $row["idproduct"];
             $product["idproperty"] = $row["idproperty"];
             $product["product_name"] = $row["product_name"];
             array_push($response["product"], $product);
            }
            echo $response;
 print(json_encode($response));
        }

  $conn->close();

?>
