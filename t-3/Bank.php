<?php
if($_POST){
 

    $electricityConsumption = ( $_POST['namber2'] );
    $electricityConsumption2 = ( $_POST['namber3'] );
    if($electricityConsumption2 >= 3){
        $message = $electricityConsumption*0.15 ;
    }
    elseif($electricityConsumption2<= 2){
       
        $message = $electricityConsumption * 0.10 ;
        
    }
    else{ 
        http_response_code(404);
        $message = "<div class='alert alert-danger text-center'> 
            Not Found
        </div>";
    }
    $ee=$message *$electricityConsumption2;
$ww=$ee +$electricityConsumption;
$month=$ww/($electricityConsumption2*12);
}





?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


<div class="col-4 offset-4 mt-5 container">
                    <form action="" method="post">
                        
                    <div class="form-group">
                            <label for="phone">User name</label>
                          <input type="text" name="namber1" id="namber1" class="form-control"  aria-describedby="helpId">
                        </div>
                    
                        <div class="form-group">
                            <label for="phone">loan amount</label>
                          <input type="number" name="namber2" id="namber2" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="phone">loan years</label>
                          <input type="number" name="namber3" id="namber3" class="form-control"  aria-describedby="helpId">
                        </div>
                     
                        <div class="container form-group">
                           <button class="btn btn-outline-primary"> Buy Now </button>
                        </div>
                       
                        </div>
                     

                       
                       
                        
              <div class="container mt-3">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>one year</th>
        <th>Years</th>
        <th>one month</th>
        <th>The whole amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php 
        
        
        if(isset($_POST['namber1'])){
          echo  $_POST['namber1'];
        }
        ?>
        </td>
        <td> <?php 
        
        if(isset($message)){
          echo $message ;
        }
        ?>
        </td>
        <td>
          <?php
           
           if(isset($ee)){
            echo $ee ;
          }
           ?>
            </td>
     
        <td><?php  
           if(isset($month)){
            echo $month ;
          }?></td>
        <td><?php if(isset($ww)){
            echo $ww ;
          } ?></td>
        
      </tr>
      
    </tbody>
  </table>
</div>
                    </form>
              </div>




 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>