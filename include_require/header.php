<?php

include_once 'include_require/session.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel = "stylesheet" href = "css/site.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        

    <title>School Website - <?php echo $title ?></title>
  </head>
  <body>

  <div class = 'container'>
  

  <nav class="navbar navbar-expand-sm navbar-primary bg-light fixed-top">
  
  <img src="uploads/logo.jpg" class="rounded mx-auto d-block" alt="Responsive image" style="with: 100px; height: 100px">
  
  <a class="navbar-brand" href="index.php">Vocational Training <br/>Development Institute</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
      <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="application.php">Apply</a>      
      <a class="nav-link" href="records.php">Attendees</a>      
        
      <a class="nav-link" href="contact.php">Contacts</a>      
      <a class="nav-link" href="programmes.php">Programmes</a>      
    </div>

    

        <div class="navbar-nav ml-auto">
        <?php

          if(!isset($_SESSION['userid'])){

        ?>
      <a class="nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>

          <?php }else {?>
            <a class="nav-link active" href="#"><span> Hello <?php echo $_SESSION['username'] ?>!</span></a>
            <a class="nav-link active" href="logout.php">Logout <span class="sr-only">(current)</span></a>

          <?php }?>
            
    </div>
  </div>
</nav>
<br>
<br>