<?php
///**
// * Created by PhpStorm.
// * User: hoangkhai
// * Date: 9/25/18
// * Time: 10:29 AM
// */
////
////if (isset($_POST['created'])) {
////
////    $title = $_POST['title'];
////    $Contents = $_POST['Contents'];
////    $introduction = $_POST['introduction'];
////
////
//////    echo $title;
//////    echo  $Contents;
//////    echo $introduction;
//////
////
//
//
////}
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title> Created</title>
    <link rel="stylesheet" href="../css/input.css">
</head>
<body>
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post">
        <h3> Created Post</h3>
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <div class="form-group">
                    <label class="p"> Title </label>
                    <input type="text" name="title" class="form-control" placeholder="Your Title" value="" />
                </div>
                <div class="form-group">
                    <label class="p"> Introduction </label>
                    <input type="text" name="introduction" class="form-control" placeholder="Your Post Introduction " value="" />
                </div>
                <div class="form-group">
                    <label class="p"> Contents </label>
                    <textarea name="Contents" class="form-control" placeholder="Your Contents" style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="created" class="btnContact" value="Created" />
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
