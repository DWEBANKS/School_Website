
<?php 
    $title = 'Index';
require_once  'include_require/header.php' ;
 require_once  'dbase/conn.php' ;

 $result=$crud->getProgrammes();

?>
<br/>
<br/>
<br/>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="uploads/VTDI-Welcome-Image_long.jpg" class="rounded" alt="Cinque Terre" width="1080" height="236px"> 
    </div>
    <div class="carousel-item">
    <img src="uploads/garden.jpg" class="rounded" alt="Cinque Terre" width="1080" height="236px"> 
    </div>
    <div class="carousel-item">
    <img src="uploads/VTDI_flexible1.jpg" class="rounded" alt="Cinque Terre" width="1080" height="236px"> 
    </div>
    <div class="carousel-item">
    <img src="uploads/VTDI_study.jpg" class="rounded" alt="Cinque Terre" width="1080" height="236px"> 
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>


  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <img src="uploads/Registry.jpg" class="rounded" alt="Cinque Terre" width="304px" height="236px"> <br/><br/>
    <img src="uploads/applynow-button.png" class="rounded" alt="Cinque Terre" width="304px" height="236px"> 
    </div>
    <div class="col-sm-4">
    <img src="uploads/download.jpg" class="rounded" alt="Cinque Terre" width="724px" height="536px"> 
    </div>
    
  </div>
</div>
    
<br>
<br>
<br>
<br>

    <?php require_once  'include_require/footer.php' ;?>

    