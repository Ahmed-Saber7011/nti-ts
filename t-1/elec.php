<?php


if($_POST){
   
    $electricityConsumption = ( $_POST['namber1'] );
    if($electricityConsumption >= 00&& $electricityConsumption <= 50){
        $message ="Amount of electricity/ month* day=" .($electricityConsumption *0.5*0.2)+($electricityConsumption *0.5);
       
    }elseif($electricityConsumption >= 51 &&$electricityConsumption<=99){
        $message = "Amount of electricity/ month* day=" .($electricityConsumption *0.75*0.2)+($electricityConsumption *0.75);
        ;
    }elseif($electricityConsumption >= 100 &&$electricityConsumption<=249){
        $message = "Amount of electricity/ month* day=" .($electricityConsumption *1.20*0.2)+($electricityConsumption *1.20);
    }
    elseif($electricityConsumption >= 250){
        $message = "Amount of electricity/ month* day=" .($electricityConsumption *1.50*0.2)+($electricityConsumption *1.50);
    }
    else{
        http_response_code(404);
        $message = "<div class='alert alert-danger text-center'> 
            Not Found
        </div>";
    }
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
  <div class="col-4 offset-4 mt-5">
                    <form action="" method="post">
                        
                    <div class="form-group">
                            <label for="phone">Phone</label>
                          <input type="number" name="namber1" id="namber1" class="form-control"  aria-describedby="helpId">
                        </div>
                    
                      
                        <?php  if(isset($message)){
                            echo $message ;
                        } ?>
                        
                        </div>
                        
                        <div class="form-group">
                           <button class="btn btn-outline-primary"> Buy Now </button>
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