<?php
    //Development code
    $host= '127.0.0.1:3307';
    $dbase= 'school_website_dbase';
    $user= 'root';
    $pass= '';
    $charset= 'utf8mb4';


        //Remote connection code
    // $host= 'remotemysql.com';
    // $dbase= 'OSQkK1i90V';
    // $user= 'OSQkK1i90V';
    // $pass= 'lid5yFexh2';
    // $charset= 'utf8mb4';

    $dsn= "mysql:host=$host;dbname=$dbase;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        echo 'Welcome to my Database';

        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOexception $e){
        throw new PDOexception($e->getMessage());

    }

    require_once 'crud.php';
    require_once 'users.php';
    $crud=new crud($pdo);
    $user=new user($pdo);

    $user->insertUser("admin","@dministrat0r");

?>