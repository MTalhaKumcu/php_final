<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mehmet talha kumcu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<style>
span{
margin-left:1rem;
color:red;
font-size:1.5rem;
font-weight:700;
}
</style>
</head>
<body>
                 
     
  
    <div class="container">
        <div class="container">
        <div class="row">
           <div class="col-2">
            </div>
            <div class="col-8 text-center">
                    <label for="input" class="form-label">Order Id</label>
                    <input type="text" class="form-control mb-5" id="input" >
                     <button type="button" class="btn btn-primary" id="fetchData" >Fetch Data</button>   
            </div>
            <div class="col-2">
            </div>
          </div>
        </div>
        <div class="row">
                <div class="col-2">
                </div>
                <div class="col-8">

                    <li>Order ID = <span id="order_id"></span></li><br>
                    <li>Amount   = <span id="amount"></span></li><br>
                    <li>Response Code = <span id="response_code"></span></li><br>
                    <li>Response Description= <span id="response_desc"></span></li> <br>
    
                   
                </div>
                <div class="col-2">
                </div>
        </div>
    </div>
    


                 
  

</body>

<script src="./jquery-3.2.1.min.js"></script>

</html>




<script type="text/javascript">
  $(document).on('click', "#fetchData", function(){
    var order_id      = $('#input').val();
    if((order_id != "")){
      $.ajax({
        url: "api.php",
        type: "POST",
        data: {order_id:order_id},
        success: function(dataResult){
        console.log(dataResult)
        $( "#order_id" ).html(dataResult.order_id);
        $( "#amount" ).html(dataResult.amount);
        $( "#response_code" ).html(dataResult.response_code);
        $( "#response_desc" ).html(dataResult.response_desc);
        }
      });
    }else {
        alert("Please fill the required places.");
    }
  });
</script>
