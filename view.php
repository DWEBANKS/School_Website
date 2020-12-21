<?php 
    $title = 'View Record';
require_once  'include_require/header.php' ;
require_once  'include_require/auth_check.php' ;
 require_once  'dbase/conn.php' ;

 if(isset($_GET['id'])){

    $id=$_GET['id'];
   
    $result=$crud->getAttendeesDetails($id);
    }else {
      include 'include_require/errormessage.php';
    }



?>
<br/>
<br/>
<br/>
<br/>
<br/>

    <img scr="<?php echo empty($result['avatar_path'])? "uploads/profile.png": $result['avatar_path'];?>" 
    class="rounded-circle" style="with: 20px; height: 20px" />


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['first_name'] .' '. $result['last_name'];?></h5>

    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['names'];?></h6>

    <p class="card-text">Gender: <?php echo $result['gender']; ?></p>
    
    <p class="card-text">Date of Birth: <?php echo $result['date_of_birth']; ?></p>

    <p class="card-text">Email Address: <?php echo $result['email']; ?></p>

    <p class="card-text">Contact Number: <?php echo $result['contact']; ?></p>

    <p class="card-text">Address: <?php echo $result['home_address']; ?></p>

    <p class="card-text">Programme: <?php echo $result['programme']; ?></p>



    
  </div>
</div>
<br>

        <a href= 'records.php' class = 'btn btn-info' >Back to Records</a>
        


<br>
<br>
<br>
<br>

    <?php require_once  'include_require/footer.php' ;?>