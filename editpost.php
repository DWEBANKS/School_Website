<?php

require_once  'dbase/conn.php' ;

    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $gender = $_POST['geneder'];
        $dob = $_POST['date_of_birth'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $home_address = $_POST['home_address'];
        $programme = $_POST['programme'];

    
    $result=$crud->editAttendees($id, $fname, $lname, $gender, $dob, $email, $contact, $home_address, $programme);

    if($result) {
        header("Location: records.php");

    }
    else{
        include 'include_require/errormessage.php';
    }
    }

    


?>