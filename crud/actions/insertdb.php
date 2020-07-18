<?php require_once 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark">

<?php
if ($_POST) {
   $title = $_POST['title'];
   $ISBN = $_POST['ISBN'];
   $short_description = $_POST[ 'short_description'];
   $publish_date = $_POST[ 'publish_date'];
   $type = $_POST['type'];
   $img = $_POST['img'];
   $status = $_POST['status'];
   $a_name = $_POST['author_name'];
   $p_name = $_POST['publisher_name'];
   $p_addresse = $_POST['pub_addresse'];
   $p_size = $_POST['pub_size'];

   $sql = "INSERT INTO media (title, ISBN, short_description, publish_date, `type`, img, `status`, author_name, publisher_name, pub_addresse, pub_size) VALUES ('$title', '$ISBN', '$short_description', '$publish_date','$type', '$img', '$status', '$a_name', '$p_name', '$p_addresse', '$p_size')";
 

    if ( $conn->query($sql) === TRUE ) {
      
        echo '
        <div class="container-fluid text-center p-5">
        <h1 class="text-info p-5 m-5">Congratulations!<br>Successfully inserted!!</h1>
        <a href="../index.php"><button class="btn bg-info text-white m-2 p-2 w-25" type="button">Back</button></a>
        </div>
        ' ;
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>