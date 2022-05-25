<?php
header("Content-Type: application/json"); 
 if (isset($_POST['order_id']) && $_POST['order_id'] !="") {
   include 'db.php'; 
   $order_id = $_POST['order_id']; 
   $result = mysqli_query($conn,"SELECT * FROM transactions2 WHERE order_id='" . $order_id . "'");
   $row  = mysqli_fetch_array($result);  
   response($row["id"],$row["amount"],$row["response_code"],$row["response_desc"]);     
  }
  
  
  
  function response ($order_id, $amount, $response_code, $response_desc) {
    $response['order_id'] = $order_id;
    $response['amount'] = $amount;
    $response['response_code'] = $response_code; 
    $response['response_desc'] = $response_desc; 
    echo json_encode($response); 
  }
  

?> 