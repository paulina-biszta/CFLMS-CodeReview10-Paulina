<?php 

require_once 'actions/db_connect.php';

if ($_POST['media_id']) {
   $media_id = $_POST['media_id'];

   $sql = "SELECT * FROM media WHERE media_id = {$media_id}" ;
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Update</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
   <div class="container-fluid bg-info text-info p-4">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center mt-3 bg-dark p-4 rounded">
                <h1 class="mb-4 text-center">UPDATE!</h1>
                <form action="actions/a_update.php" method="POST">
                    <div class="row">
                        <div class="form-group col">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['title'] ?>">
                          
                        </div>
                        <div class="form-group col">    
                            <label for="ISBN">ISBN</label>
                            <input type="text" class="form-control" id="ISBN" name="ISBN" value="<?php echo $data['ISBN'] ?>">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="short_description">Short Description</label>
                            <input type="text" class="form-control" id="short_description" name="short_description" value="<?php echo $data['short_description'] ?>">
                           
                        </div>
                        <div class="form-group col">
                            <label for="publish_date">Publish Date</label>
                            <input type="date" class="form-control" id="publish_date" name="publish_date" value="<?php echo $data['publish_date'] ?>">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="author_name">Author name</label>
                            <input type="text" class="form-control" id="author_name" name="author_name" value="<?php echo $data['author_name'] ?>">
                        </div>
                        <div class="form-group col">
                            <label for="img">Image</label>
                            <input type="text" class="form-control" id="img" name="img" value="<?php echo $data['img'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="publisher_name">Publisher name</label>
                            <input type="text" class="form-control" id="publisher_name" name="publisher_name" value="<?php echo $data['publisher_name'] ?>">
                        </div>
                        <div class="form-group col">    
                            <label for="pub_addresse">Publisher Address</label>
                            <input type="text" class="form-control" id="pub_addresse" name="pub_addresse" value="<?php echo $data['pub_addresse'] ?>">
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
                    <div class="d-flex flex-column">
                        <input type= "hidden" name= "media_id" value= "<?php echo $data['media_id']?>" />
                        <button class="btn bg-info text-white text-center"  type= "submit">Save Changes</button >
                        <a href= "index.php"><button class="btn bg-info text-white w-100 mt-3 text-center" type="button" >Back</button ></a>
                    </div>
                </form >
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body >
</html >

<?php
}
?>