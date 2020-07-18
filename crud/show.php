<?php require_once 'actions/db_connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show more</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron jumbotron-fluid m-0">
  <div class="container">
    <h1 class="display-4">The Big Library</h1>
    <p class="lead">We are happy to host you!</p>
  </div>
</div>
<div class="container-fluid bg-info m-0 p-4">
  <?php 
  $id = $_POST['id'];
  $sql = "SELECT * FROM media WHERE media_id = {$id}";
  $result = mysqli_query($conn, $sql);  
  while ($row = mysqli_fetch_assoc($result)) {
   echo '
   <div class="container text-center">
        <div class="card col-8 m-3 bg-dark text-white-50 mx-auto" >
        
            <img src="' . $row["img"] . '" class="card-img-top pt-3" alt="...">
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
        <a href="index.php"><button class="btn bg-dark text-white w-50" type="button">Back</button></a>
    </div>
      ';
  
  }


  ?>
</div>

    
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
