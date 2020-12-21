<?php 
    class crud{
        private $dbase;

        function __construct ($conn){

            $this ->dbase = $conn;
        }

        public function insertAttendees ($fname, $lname, $gender, $dob, $email, $contact, $home_address, $programme,  $avatar_path){

        try {
            //code...
            $sql = "INSERT INTO attendees (first_name, last_name, gender_id, date_of_birth, email, contact, home_address, programme_id, avatar_path)
             VALUES (:fname, :lname, :gender, :dob, :email, :contact, :home_address, :programme, :avatar_path)";

            $stmt = $this ->dbase->prepare($sql);

            $stmt ->bindparam(':fname', $fname);
            $stmt ->bindparam(':lname', $lname);
            $stmt ->bindparam(':gender', $gender);
            $stmt ->bindparam(':dob', $dob);
            $stmt ->bindparam(':email', $email);
            $stmt ->bindparam(':contact', $contact);
            $stmt ->bindparam(':programme', $programme);
            $stmt ->bindparam(':home_address', $home_address);
            $stmt ->bindparam(':avatar_path', $avatar_path);

            $stmt ->execute();
            return true;

        } catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }

        }

        public function editAttendees ($id, $fname, $lname, $gender, $dob, $email, $contact, $home_address, $programme){
           try{
               
               $sql = "UPDATE `attendees` SET `first_name`=:fname, `last_name`=:lname, `gender_id`=:gender, `date_of_birth`=:dob,
            `email`=:email, `contact`=:contact, `home_address`=:home_address, `programme_id`=:programme,  WHERE attendee_id =:id";

            $stmt=$this->dbase->prepare($sql);

            $stmt ->bindparam(':id', $id);
            $stmt ->bindparam(':fname', $fname);
            $stmt ->bindparam(':lname', $lname);
           $stmt ->bindparam(':gender', $gender);
            $stmt ->bindparam(':dob', $dob);
            $stmt ->bindparam(':email', $email);
            $stmt ->bindparam(':contact', $contact);
            $stmt ->bindparam(':home_address', $home_address);
            $stmt ->bindparam(':programme', $programme);
           

            $stmt ->execute();
            return true;

        } catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }
        }

        public function getAttendees (){

            try {
            $sql = "SELECT * FROM `attendees` a inner join programmes c  on a.programme_id = c.programme_id";
            $result = $this ->dbase ->query($sql);
            return $result; 
        }catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }
        }

        public function getAttendeesDetails ($id){

            try {
                $sql = "select * from attendees a inner join programmes c  on a.programme_id = c.programme_id where attendee_id = :id";
            $stmt = $this ->dbase ->prepare($sql);
            $stmt ->bindparam(':id', $id);
            $stmt ->execute();
            $result = $stmt->fetch();
            return $result;

            } catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }
        }        


        public function deleteAttendees ($id){

            try {
            $sql = "delete from attendees where attendee_id = :id";
            $stmt=$this->dbase->prepare($sql);
            $stmt ->bindparam(':id', $id);
            $stmt ->execute();
            return true;

        } catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }
        }        

        public function getprogrammes (){

            try {

            $sql = "SELECT * FROM `programmes`";
            $result = $this ->dbase ->query($sql);
            return $result; 
        }catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }   
        }

        public function getprogrammesById($id){

            try {

            $sql = "SELECT * FROM `programmes` where programme_id =:id";
            $stmt = $this ->dbase ->prepare($sql);
            $stmt ->bindparam(':id', $id);
            $stmt ->execute();
            $result = $stmt->fetch();
            return $result; 
        }catch (PDOexception $e) {
            //throw $th;
            echo $e ->getMessage();
            return false;
            }   
        }
    }


?>