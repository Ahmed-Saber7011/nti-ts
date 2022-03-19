<?php



  if(isset($_POST['submit'])){
      if(!empty($_POST['checkArr'])){
        foreach($_POST['checkArr'] as $checked){
        
        }
      } else {
        echo '<div class="error">Checkbox is not selected!</div>';
      }
      if(!empty($_POST['checkArr1'])){
        foreach($_POST['checkArr1'] as $checked1){
         
        }
      } else {
        echo '<div class="error">Checkbox is not selected!</div>';
      }
      if(!empty($_POST['checkArr2'])){
        foreach($_POST['checkArr2'] as $checked2){
         
        }
      } else {
        echo '<div class="error">Checkbox is not selected!</div>';
      }
      if(!empty($_POST['checkArr3'])){
        foreach($_POST['checkArr3'] as $checked3){
          
        }
      } else {
        echo '<div class="error">Checkbox is not selected!</div>';
      }
      if(!empty($_POST['checkArr4'])){
        foreach($_POST['checkArr4'] as $checked4){
        
        }
      } else {
        echo '<div class="error">Checkbox is not selected!</div>';
      }
      
      
     
      
  }
  $ww=  $checked+$checked1+$checked2+$checked3+$checked4
 
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
  <?php
  if($ww>=25){
    echo "<div class='alert alert-success alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>";
    }else{
      include_once "Result.php";
    }
  
  ?>

 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>