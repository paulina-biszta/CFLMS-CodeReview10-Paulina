<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publishers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body class="bg-info">

<div class="jumbotron jumbotron-fluid m-0">
  <div class="container">
    <h1 class="display-4">The Big Library</h1>
    <p class="lead">Meet our Publishers!</p>
    <a href="index.php"><button class="btn bg-dark text-white w-25" type="button">Back</button></a>
  </div>
</div>

<div class="container-fuid bg-info text-center">


<script>
$(document).ready(function(){

$("#button1").click(function(){
$("#1").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'greg%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) { 
  echo 
  '
  
   
        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto border-info" >
            
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
      
    
  ';
  } ?>`);
});

$("#button2").click(function(){
$("#2").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'marta%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) {  echo 
  '

        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto" >
            
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
    
  ';} ?>`);
});

$("#button3").click(function(){
$("#3").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'tim%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) {  echo 
  '
  
        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto border-info" >
           
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
    
  ';} ?>`);
});

$("#button4").click(function(){
$("#4").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'rita%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) {  echo 
  '
  
        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto" >
           
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
    
  ';} ?>`);
});

$("#button5").click(function(){
$("#5").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'ver%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) {  echo 
  '
  
        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto border-info" >
           
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
    
  ';} ?>`);
});

$("#button6").click(function(){
$("#6").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'martin%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) {  echo 
  '
  
        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto" >
           
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
    
  ';} ?>`);
});

$("#button7").click(function(){
$("#7").append(`<?php $sql = "SELECT * FROM media WHERE publisher_name LIKE 'jim%'";   $result = mysqli_query($conn, $sql);       while ($row = mysqli_fetch_assoc($result)) {  echo 
  '
  
        <div class="card col-3 m-3 bg-dark text-white-50 mx-auto border-info" >
           
            <div class="card-body text-left">
                    <h5 class="card-title">' . $row["title"] . '</h5>
                    <p class="card-text">ISBN: ' . $row["ISBN"] .  '</p>
                    <p class="card-text">Author : ' . $row["author_name"] .  '</p>
                    <p class="card-text">Type: ' . $row["type"] .  '</p>
                    <p class="card-text">Publish date: ' . $row["publish_date"] .  '</p>
                    <p class="card-text">Description: ' . $row["short_description"] .  '</p>
                    <p class="card-text text-info">Publisher name: ' . $row["publisher_name"] .  '</p>
                    <p class="card-text">Addresse: ' . $row["pub_addresse"] .  '</p>
                    <p class="card-text">Size: ' . $row["pub_size"] .  '</p>
                    <p class="card-text">Status: ' . $row["status"] .  '</p>
            </div>
        </div>
    
  ';} ?>`);
});

});

</script>

  <button type="button" id="button1" class="m-1 btn btn-info btn-outline-dark w-25 m-3">Gregory Jones</button>
    <div class="row justify-content-around m-0 bg-dark" id="1"></div>
    <button type="button" id="button2" class="m-1 btn btn-dark w-25 m-3">Marta Doe</button>
    <div class="row justify-content-around m-0 bg-info" id="2"></div>
    <button type="button" id="button3" class="m-1 btn btn-info btn-outline-dark w-25 m-3">Tim Burton</button>
    <div class="row justify-content-around m-0 bg-dark" id="3"></div>
    <button type="button" id="button4" class="m-1 btn btn-dark w-25">Rita Ora</button>
    <div class="row justify-content-around m-0 bg-info" id="4"></div>
    <button type="button" id="button5" class="m-1 btn btn-info btn-outline-dark w-25 m-3">Vera Wang</button>
    <div class="row justify-content-around m-0 bg-dark" id="5"></div>
    <button type="button" id="button6" class="m-1 btn btn-dark w-25 m-3">Martin Bolan</button>
    <div class="row justify-content-around m-0 bg-info" id="6"></div>
    <button type="button" id="button7" class="m-1 btn btn-info btn-outline-dark w-25 m-3">Jim Con</button>
    <div class="row justify-content-around m-0 bg-dark" id="7"></div>
    
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>