
<?php 
    $title = 'Programmes';
require_once  'include_require/header.php' ;
 require_once  'dbase/conn.php' ;

 $result=$crud->getProgrammes();

?>
<br>
<br>
<br/>
<br/>


  
<div class="list-group">
    
  <a href="https://vtdi.heart-nta.org/Programmes/BSc-in-Information-and-Communication-Technology" class="list-group-item list-group-item-action list-group-item-primary">BSc. in Information and Communication Technology</a>
  <a href="https://vtdi.heart-nta.org/Programmes/BSc-in-Career-Development" class="list-group-item list-group-item-action list-group-item-secondary">BSc. in Career Development</a>
  <a href="https://vtdi.heart-nta.org/Programmes/BEd-in-Applied-Technology" class="list-group-item list-group-item-action list-group-item-success">BEd. in Applied Technology</a>
  <a href="https://vtdi.heart-nta.org/Programmes/ASc-Degree-in-Entertainment-and-Events-Management" class="list-group-item list-group-item-action list-group-item-danger">ASc. Degree in Entertainment and Events Management</a>
  <a href="https://vtdi.heart-nta.org/Programmes/Diploma-in-Draughting-and-Building-Technology" class="list-group-item list-group-item-action list-group-item-warning">Diploma in Draughting and Building Technology</a>
  <a href="https://vtdi.heart-nta.org/Programmes/Diploma-in-Construction-Site-Management" class="list-group-item list-group-item-action list-group-item-info">Diploma in Construction Management</a>
  <a href="https://vtdi.heart-nta.org/Programmes/Cisco-Courses" class="list-group-item list-group-item-action list-group-item-light">Cisco Courses</a>
  <a href="https://vtdi.heart-nta.org/Programmes/NVQ-Level-3-in-Entrepreneurship" class="list-group-item list-group-item-action list-group-item-dark">NVQJ-Level 3 in Entrapreneurship</a>
</div>

    
<br>
<br>
<br>
<br>

    <?php require_once  'include_require/footer.php' ;?>

    