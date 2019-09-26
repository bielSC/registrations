
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<table class="table table-striped">
  	
      <thead>
      <tr>
         
      <th style="width: 10%">id</th>
      <th style="width: 10%">username</th>
      <th style="width: 10%">email</th>
      <th style="width: 10%">phone</th>
      
          
      </tr>
      </thead>
<?php while($row = mysqli_fetch_array($result)){  ?> 
<tr>
    <td><?php echo $row['id'] ?></td>  
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    
</tr>

<?php
  }
?>
</table>
<br>
<br>
<?php include('updateForm.php'); ?>


</body>
</html>