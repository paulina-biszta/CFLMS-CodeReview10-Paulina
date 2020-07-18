<?php require_once 'actions/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <title>Insert</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container bg-dark text-info pt-2 pb-4 rounded">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center mt-2">
            <h1 class="text-center p-2">INSERT</h1>
                <form action="actions/insertdb.php" method="POST">
                    <div class="row">
                        <div class="form-group col">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                          
                        </div>
                        <div class="form-group col">    
                            <label for="ISBN">ISBN</label>
                            <input type="text" class="form-control" id="ISBN" name="ISBN">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="short_description">Short Description</label>
                            <input type="text" class="form-control" id="short_description" name="short_description">
                           
                        </div>
                        <div class="form-group col">
                            <label for="publish_date">Publish Date</label>
                            <input type="date" class="form-control" id="publish_date" name="publish_date">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="author_name">Author name</label>
                            <input type="text" class="form-control" id="author_name" name="author_name">
                        </div>
                        <div class="form-group col">
                            <label for="img">Image</label>
                            <input type="text" class="form-control" id="img" name="img">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="publisher_name">Publisher name</label>
                            <input type="text" class="form-control" id="publisher_name" name="publisher_name">
                        </div>
                        <div class="form-group col">    
                            <label for="pub_addresse">Publisher Address</label>
                            <input type="text" class="form-control" id="pub_addresse" name="pub_addresse">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="pub_size">Publisher size</label><br>
                            <input type="radio" id="small" name="pub_size" value="small">
                            <label for="small">Small</label><br>
                            <input type="radio" id="medium" name="pub_size" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="big" name="pub_size" value="big">
                            <label for="big">Big</label>
                        </div>
                    
                        <div class="form-group col">
                            <label for="type">Type</label><br>
                            <input type="radio" id="music" name="type" value="music">
                            <label for="music">Music</label><br>
                            <input type="radio" id="book" name="type" value="book">
                            <label for="book">Book</label><br>
                            <input type="radio" id="movie" name="type" value="movie">
                            <label for="movie">Movie</label>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="status">Availibility</label><br>
                            <input type="radio" id="available" name="status" value="available">
                            <label for="male">Available</label><br>
                            <input type="radio" id="reserved" name="status" value="reserved">
                            <label for="female">Reserved</label><br>
                        </div>
                        <div class="text-center">
                    <button type="submit" value="Submit" name="submit" class="btn btn-info w-25">Submit</button>
                    <a href= "index.php"><button class="btn bg-info text-white w-25 text-center" type="button" >Back</button ></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>