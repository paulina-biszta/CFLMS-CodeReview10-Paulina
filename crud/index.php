<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron jumbotron-fluid m-0">
  <div class="container">
    <h1 class="display-4">The Big Library</h1>
    <p class="lead">We are happy to host you!</p>
  </div>
</div>

<div class="container-fluid bg-info p-0 m-0 mx-auto">
    <div class="text-right bg-dark p-3 text-white-50">
    <a href="insert.php"><button type="button" class="btn btn-outline-info text-white mr-5">INSERT</button></a>
    <a href="publishers.php"><button type="button" class="btn btn-outline-info text-white mr-5">PUBLISHERS</button></a>
    </div>
    <div class="row justify-content-around m-0">
      <?php
      $sql = "SELECT * FROM media LIMIT 1000 ";

      $result = mysqli_query($conn, $sql);
      // fetch the next row (as long as there are any) into $row
      while ($row = mysqli_fetch_assoc($result)) {
      
        echo '
        
        <div class="card sm-col-8 col-3 m-3 bg-dark text-white-50" >
            <img src="' . $row["img"] . '" class="card-img-top pt-3" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row["title"] . '</h5>
                <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                <p class="card-text">Type: ' . $row["type"] .  '</p>
                <div class="d-flex justify-content-between">
                     <form action ="actions/delete.php" class="w-25" method="post">
                            <input type="hidden" name= "media_id" value="' . $row["media_id"] . '" />
                            <button type="submit" class="btn btn-outline-danger text-white">DELETE</button>
                        </form>
                        <form action ="update.php" class="w-25" method="post">
                            <input type="hidden" name= "media_id" value="' . $row["media_id"] . '" />
                            <button type="submit" class="btn btn-outline-info text-white">UPDATE</button>
                     </form>
                     <form action ="show.php" class="w-30" method="post">
                     <input type="hidden" name= "id" value="' . $row["media_id"] . '" />
                     <button type="submit" class="btn btn-outline-success text-white">SHOW MORE</button>
              </form>
                </div>
            </div>
        </div>       
        ';
      }
      // Free result set
      mysqli_free_result($result);
      // Close connection
      mysqli_close($conn);
      ?>

    </div>



  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>