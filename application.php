
<?php 
    $title = 'Application';
require_once  'include_require/header.php' ;
 require_once  'dbase/conn.php' ;

 $result=$crud->getProgrammes();

?>
<br/>
<br/>
<br/>
<br/>
<br/>

    <h1 class = 'text-center'>Vocational Training and Development Institute Appication Form</h1>

    <form method="post" action="congrats.php" ecytype ='mulitpart/form-data'>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input required type="text" class="form-control" id="firstname" name = "firstname" >
  </div>
  <form>
  <form>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname" >
  </div>
  <form>
  <div class="form-check-inline">
  <label for="Gender">Gender</label>
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Male
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
      </label>
    </div>
  <form>
  <div class="form-group">
    <label for="date_of_birth">Date Of Birth</label>
    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" >
  </div>
  <form>
  <div class="form-group">
    <label for="class">Select Your Programme</label>
    <select class="form-control" id="class" name="class">

      <option></option>
      <?php while ($r = $result ->fetch (PDO::FETCH_ASSOC)) {?>

      <option value ="<?php echo $r ['class_id'] ?>"><?php echo $r ['names']; ?></option>

      <?php }?>
      
    </select>
  </div>
  <form>
  <form>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input required type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
    <small id="phoneHelp"  class="form-text text-muted">We'll never share your contact with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
    <small id="phoneHelp"  class="form-text text-muted">We'll never share your address with anyone else.</small>
  </div>
  <br>

  <div class="custom-file">
    <input type="file" accept ='image/*' class="custom-file-input" id="avatar" name="avatar" >
    <label class="custom-file-label" for = 'avatar'>Choose file</label>
    <small id="avatar"  class="form-text text-danger">File upload is optional.</small>
    
        <br>
  </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<br>
<br>

    <?php require_once  'include_require/footer.php' ;?>

    