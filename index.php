<!DOCTYPE html>
<html>
<head>
    <title>Lab 7- PHP 1</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <h1 class="jumbotron text-center">Image Gallery</h1>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-4 my-auto">
                  
                        <img src="images/vino-li-ckeSiSWsKaE-unsplash.jpg" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-4 my-auto">
                        <img src="images/samuel-girven-omzAJZ0ACqo-unsplash.jpg" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-4 my-auto">
                        <img src="images/billow-926-G79wOy3hTok-unsplash.jpg" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-4 my-auto">
                        <img src="images/pat-whelen-HOWfdzh1Q0g-unsplash.jpg" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-4 my-auto">
                        <img src="images/nick-fewings-8_VWBXsveQE-unsplash.jpg" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-4 my-auto">
                        <img src="images/tetiana-bykovets-I-T54pyFujk-unsplash.jpg" class="img-fluid img-thumbnail">
                    </div>
                    <?php
                    // Using dir to hold images directory
                        $dir = "images/";

                      //Making an array of the contents in dir 
                        $a = scandir($dir);

                       
             
                       //removing unwanted elements in content 
                        $files = array_diff( $a, array(".", "..", "vino-li-ckeSiSWsKaE-unsplash.jpg","samuel-girven-omzAJZ0ACqo-unsplash.jpg","billow-926-G79wOy3hTok-unsplash.jpg", "pat-whelen-HOWfdzh1Q0g-unsplash.jpg", "nick-fewings-8_VWBXsveQE-unsplash.jpg", "tetiana-bykovets-I-T54pyFujk-unsplash.jpg") );
                   
                        //for each loop of files stored in printfile
                        foreach($files as $pictures)
                        // for each picture we echo a div and an image
                        {
                            echo "<div class='col-md-4 my-auto'>
                           
                                <img class='img-fluid img-thumbnail' src='images/$pictures' ' >
                           
                        </div>";
                        
                           
                         }
                        ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>