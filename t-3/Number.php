
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


<form action="Review.php"method="post">
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Question</th>
      <th scope="col">Excellent</th>
      <th scope="col">Very good</th>
      <th scope="col">good</th>
      <th scope="col">Bad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <th scope="row">هل انت راضي عن مستوى النظافة</th>
     
      <td> <input type="radio" name="checkArr4[]" value="10"></td>
      <td> <input type="radio" name="checkArr4[]" value="5"></td>
      <td> <input type="radio" name="checkArr4[]" value="3"></td>
      <td> <input type="radio" name="checkArr4[]" value="0"></td>
    </tr>
    <tr>
      <th scope="row">هل انت راضي علي اسعار الخدمات</th>
      <td> <input type="radio" name="checkArr[]" value="10"></td>
      <td> <input type="radio" name="checkArr[]" value="5"></td>
      <td> <input type="radio" name="checkArr[]" value="3"></td>
      <td> <input type="radio" name="checkArr[]" value="0"></td>
    </tr>
    <tr>
      <th scope="row">هل انت راضي عن خدمة التمريض</th>
      <td> <input type="radio" name="checkArr1[]" value="10"></td>
      <td> <input type="radio" name="checkArr1[]" value="5"></td>
      <td> <input type="radio" name="checkArr1[]" value="3"></td>
      <td> <input type="radio" name="checkArr1[]" value="0"></td>
    </tr>
    <tr>
    <th scope="row">هل انت راضي علي الهدوء بالمستشفي</th>
    <td> <input type="radio" name="checkArr2[]" value="10"></td>
      <td> <input type="radio" name="checkArr2[]" value="5"></td>
      <td> <input type="radio" name="checkArr2[]" value="3"></td>
      <td> <input type="radio" name="checkArr2[]" value="0"></td>
    </tr>
    <tr>
    <th scope="row">هل انت راضي علي مستوي الدكاترة</th>
    <td> <input type="radio" name="checkArr3[]" value="10"></td>
    <td> <input type="radio" name="checkArr3[]" value="5"></td>
    <td> <input type="radio" name="checkArr3[]" value="3"></td>
    <td> <input type="radio" name="checkArr3[]" value="0"></td>
    </tr>
    
  </tbody>
</table>
<input type="submit" name="submit" value="Choose options" />
</form>




 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>