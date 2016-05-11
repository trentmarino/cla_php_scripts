<?php
include "db_connect.php";

$productsJSON = $_POST['page'];
$productsArr = json_decode(stripcslashes($productsJSON));
$sql = "INSERT INTO page_content (idproduct, info_type, content, content_order)
    VALUES";
  
$valuesArr = array();
foreach($productsArr  as $product){

    $type = $product->type;
    $idProduct =$product->productid;
    $content = $product->content;
    $contentOrder = $product->content_order;
    $valuesArr[] = "('$idProduct', '$type', '$content','$contentOrder')";

}

$sql .= implode(',', $valuesArr);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//foreach( as $product)
//{
//    echo "type: " . $product->type. "<br> ";
//    echo "content: " . $product->content . "<br> ";
//    echo "productID: " . $product->idproduct . "<br> ";
//    echo "content order: " . $product->content_order . "<br> ";
//
//
//
//}







?>